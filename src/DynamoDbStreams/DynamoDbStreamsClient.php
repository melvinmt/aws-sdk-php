<?php
namespace AwsSDK\DynamoDbStreams;

use AwsSDK\AwsClient;
use AwsSDK\DynamoDb\DynamoDbClient;

/**
 * This client is used to interact with the **Amazon DynamoDb Streams** service.
 *
 * @method \AwsSDK\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \AwsSDK\Result getRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecordsAsync(array $args = [])
 * @method \AwsSDK\Result getShardIterator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShardIteratorAsync(array $args = [])
 * @method \AwsSDK\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 */
class DynamoDbStreamsClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        $args['retries']['default'] = 11;
        $args['retries']['fn'] = [DynamoDbClient::class, '_applyRetryConfig'];

        return $args;
    }
}