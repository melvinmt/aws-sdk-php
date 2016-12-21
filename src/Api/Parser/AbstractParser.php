<?php
namespace AwsSDK\Api\Parser;

use AwsSDK\Api\Service;
use AwsSDK\CommandInterface;
use AwsSDK\ResultInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @internal
 */
abstract class AbstractParser
{
    /** @var \AwsSDK\Api\Service Representation of the service API*/
    protected $api;

    /**
     * @param Service $api Service description.
     */
    public function __construct(Service $api)
    {
        $this->api = $api;
    }

    /**
     * @param CommandInterface  $command  Command that was executed.
     * @param ResponseInterface $response Response that was received.
     *
     * @return ResultInterface
     */
    abstract public function __invoke(
        CommandInterface $command,
        ResponseInterface $response
    );
}
