<?php
namespace AwsSDK\Sqs;

use AwsSDK\AwsClient;
use AwsSDK\CommandInterface;
use AwsSDK\Sqs\Exception\SqsException;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;

/**
 * Client used to interact Amazon Simple Queue Service (Amazon SQS)
 *
 * @method \AwsSDK\Result addPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPermissionAsync(array $args = [])
 * @method \AwsSDK\Result changeMessageVisibility(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeMessageVisibilityAsync(array $args = [])
 * @method \AwsSDK\Result changeMessageVisibilityBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeMessageVisibilityBatchAsync(array $args = [])
 * @method \AwsSDK\Result createQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createQueueAsync(array $args = [])
 * @method \AwsSDK\Result deleteMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMessageAsync(array $args = [])
 * @method \AwsSDK\Result deleteMessageBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMessageBatchAsync(array $args = [])
 * @method \AwsSDK\Result deleteQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQueueAsync(array $args = [])
 * @method \AwsSDK\Result getQueueAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueueAttributesAsync(array $args = [])
 * @method \AwsSDK\Result getQueueUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueueUrlAsync(array $args = [])
 * @method \AwsSDK\Result listDeadLetterSourceQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeadLetterSourceQueuesAsync(array $args = [])
 * @method \AwsSDK\Result listQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueuesAsync(array $args = [])
 * @method \AwsSDK\Result purgeQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purgeQueueAsync(array $args = [])
 * @method \AwsSDK\Result receiveMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise receiveMessageAsync(array $args = [])
 * @method \AwsSDK\Result removePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \AwsSDK\Result sendMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessageAsync(array $args = [])
 * @method \AwsSDK\Result sendMessageBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessageBatchAsync(array $args = [])
 * @method \AwsSDK\Result setQueueAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setQueueAttributesAsync(array $args = [])
 */
class SqsClient extends AwsClient
{
    public function __construct(array $config)
    {
        parent::__construct($config);
        $list = $this->getHandlerList();
        $list->appendBuild($this->queueUrl(), 'sqs.queue_url');
        $list->appendSign($this->validateMd5(), 'sqs.md5');
    }

    /**
     * Converts a queue URL into a queue ARN.
     *
     * @param string $queueUrl The queue URL to perform the action on.
     *                         Retrieved when the queue is first created.
     *
     * @return string An ARN representation of the queue URL.
     */
    public function getQueueArn($queueUrl)
    {
        return strtr($queueUrl, array(
            'http://'        => 'arn:aws:',
            'https://'       => 'arn:aws:',
            '.amazonaws.com' => '',
            '/'              => ':',
            '.'              => ':',
        ));
    }

    /**
     * Moves the URI of the queue to the URI in the input parameter.
     *
     * @return callable
     */
    private function queueUrl()
    {
        return static function (callable $handler) {
            return function (
                CommandInterface $c,
                RequestInterface $r = null
            ) use ($handler) {
                if ($c->hasParam('QueueUrl')) {
                    $uri = Uri::resolve($r->getUri(), $c['QueueUrl']);
                    $r = $r->withUri($uri);
                }
                return $handler($c, $r);
            };
        };
    }

    /**
     * Validates ReceiveMessage body MD5s
     *
     * @return callable
     */
    private function validateMd5()
    {
        return static function (callable $handler) {
            return function (
                CommandInterface $c,
                RequestInterface $r = null
            ) use ($handler) {
                if ($c->getName() !== 'ReceiveMessage') {
                    return $handler($c, $r);
                }

                return $handler($c, $r)
                    ->then(
                        function ($result) use ($c, $r) {
                            foreach ((array) $result['Messages'] as $msg) {
                                if (isset($msg['MD5OfBody'])
                                    && md5($msg['Body']) !== $msg['MD5OfBody']
                                ) {
                                    throw new SqsException(
                                        sprintf(
                                            'MD5 mismatch. Expected %s, found %s',
                                            $msg['MD5OfBody'],
                                            md5($msg['Body'])
                                        ),
                                        $c,
                                        [
                                            'code' => 'ClientChecksumMismatch',
                                            'request' => $r
                                        ]
                                    );
                                }
                            }
                            return $result;
                        }
                    );
            };
        };
    }
}
