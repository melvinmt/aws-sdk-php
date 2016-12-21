<?php
namespace AwsSDK\Ec2;

use AwsSDK\AwsClientInterface;
use AwsSDK\Signature\SignatureV4;
use AwsSDK\Endpoint\EndpointProvider;
use AwsSDK\CommandInterface;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;

/**
 * @internal Adds computed values to the CopySnapshot operation.
 */
class CopySnapshotMiddleware
{
    private $client;
    private $endpointProvider;
    private $nextHandler;

    public static function wrap(AwsClientInterface $client, callable $endpointProvider)
    {
        return function (callable $handler) use ($endpointProvider, $client) {
            $f = new CopySnapshotMiddleware($endpointProvider, $client, $handler);
            return $f;
        };
    }

    public function __construct(
        callable $endpointProvider,
        AwsClientInterface $client,
        callable $nextHandler
    ) {
        $this->endpointProvider = $endpointProvider;
        $this->client = $client;
        $this->nextHandler = $nextHandler;
    }

    public function __invoke(CommandInterface $cmd, RequestInterface $request = null)
    {
        if ($cmd->getName() == 'CopySnapshot'
            && (!isset($cmd->__skipCopySnapshot))
        ) {
            $cmd['PresignedUrl'] = $this->createPresignedUrl($this->client, $cmd);
            $cmd['DestinationRegion'] = $this->client->getRegion();
        }

        $f = $this->nextHandler;
        return $f($cmd, $request);
    }

    private function createPresignedUrl(
        AwsClientInterface $client,
        CommandInterface $cmd
    ) {
        $newCmd = $client->getCommand('CopySnapshot', $cmd->toArray());
        // Avoid infinite recursion by flagging the new command.
        $newCmd->__skipCopySnapshot = true;
        // Serialize a request for the CopySnapshot operation.
        $request = \AwsSDK\serialize($newCmd);
        // Create the new endpoint for the target endpoint.
        $endpoint = EndpointProvider::resolve($this->endpointProvider, [
            'region'  => $cmd['SourceRegion'],
            'service' => 'ec2'
        ])['endpoint'];

        // Set the request to hit the target endpoint.
        $uri = $request->getUri()->withHost((new Uri($endpoint))->getHost());
        $request = $request->withUri($uri);
        // Create a presigned URL for our generated request.
        $signer = new SignatureV4('ec2', $cmd['SourceRegion']);

        return (string) $signer->presign(
            SignatureV4::convertPostToGet($request),
            $client->getCredentials()->wait(),
            '+1 hour'
        )->getUri();
    }
}
