<?php
namespace AwsSDK\Firehose;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Firehose** service.
 *
 * @method \AwsSDK\Result createDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeliveryStreamAsync(array $args = [])
 * @method \AwsSDK\Result deleteDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryStreamAsync(array $args = [])
 * @method \AwsSDK\Result describeDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryStreamAsync(array $args = [])
 * @method \AwsSDK\Result listDeliveryStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeliveryStreamsAsync(array $args = [])
 * @method \AwsSDK\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \AwsSDK\Result putRecordBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordBatchAsync(array $args = [])
 * @method \AwsSDK\Result updateDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDestinationAsync(array $args = [])
 */
class FirehoseClient extends AwsClient {}
