<?php
namespace AwsSDK\CloudTrail;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS CloudTrail** service.
 *
 * @method \AwsSDK\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \AwsSDK\Result createTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrailAsync(array $args = [])
 * @method \AwsSDK\Result deleteTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrailAsync(array $args = [])
 * @method \AwsSDK\Result describeTrails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrailsAsync(array $args = [])
 * @method \AwsSDK\Result getEventSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventSelectorsAsync(array $args = [])
 * @method \AwsSDK\Result getTrailStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrailStatusAsync(array $args = [])
 * @method \AwsSDK\Result listPublicKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPublicKeysAsync(array $args = [])
 * @method \AwsSDK\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \AwsSDK\Result lookupEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupEventsAsync(array $args = [])
 * @method \AwsSDK\Result putEventSelectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventSelectorsAsync(array $args = [])
 * @method \AwsSDK\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \AwsSDK\Result startLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLoggingAsync(array $args = [])
 * @method \AwsSDK\Result stopLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopLoggingAsync(array $args = [])
 * @method \AwsSDK\Result updateTrail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrailAsync(array $args = [])
 */
class CloudTrailClient extends AwsClient {}
