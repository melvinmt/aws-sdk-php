<?php
namespace AwsSDK\Kinesis;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis** service.
 *
 * @method \AwsSDK\Result addTagsToStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToStreamAsync(array $args = [])
 * @method \AwsSDK\Result createStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamAsync(array $args = [])
 * @method \AwsSDK\Result decreaseStreamRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decreaseStreamRetentionPeriodAsync(array $args = [])
 * @method \AwsSDK\Result deleteStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamAsync(array $args = [])
 * @method \AwsSDK\Result describeLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLimitsAsync(array $args = [])
 * @method \AwsSDK\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \AwsSDK\Result disableEnhancedMonitoring(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableEnhancedMonitoringAsync(array $args = [])
 * @method \AwsSDK\Result enableEnhancedMonitoring(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableEnhancedMonitoringAsync(array $args = [])
 * @method \AwsSDK\Result getRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecordsAsync(array $args = [])
 * @method \AwsSDK\Result getShardIterator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShardIteratorAsync(array $args = [])
 * @method \AwsSDK\Result increaseStreamRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise increaseStreamRetentionPeriodAsync(array $args = [])
 * @method \AwsSDK\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \AwsSDK\Result listTagsForStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForStreamAsync(array $args = [])
 * @method \AwsSDK\Result mergeShards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeShardsAsync(array $args = [])
 * @method \AwsSDK\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \AwsSDK\Result putRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordsAsync(array $args = [])
 * @method \AwsSDK\Result removeTagsFromStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromStreamAsync(array $args = [])
 * @method \AwsSDK\Result splitShard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise splitShardAsync(array $args = [])
 * @method \AwsSDK\Result updateShardCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateShardCountAsync(array $args = [])
 */
class KinesisClient extends AwsClient {}
