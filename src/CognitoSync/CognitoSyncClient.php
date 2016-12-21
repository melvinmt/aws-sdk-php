<?php
namespace AwsSDK\CognitoSync;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Sync** service.
 *
 * @method \AwsSDK\Result bulkPublish(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bulkPublishAsync(array $args = [])
 * @method \AwsSDK\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \AwsSDK\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \AwsSDK\Result describeIdentityPoolUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityPoolUsageAsync(array $args = [])
 * @method \AwsSDK\Result describeIdentityUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityUsageAsync(array $args = [])
 * @method \AwsSDK\Result getBulkPublishDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBulkPublishDetailsAsync(array $args = [])
 * @method \AwsSDK\Result getCognitoEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCognitoEventsAsync(array $args = [])
 * @method \AwsSDK\Result getIdentityPoolConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoolConfigurationAsync(array $args = [])
 * @method \AwsSDK\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \AwsSDK\Result listIdentityPoolUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoolUsageAsync(array $args = [])
 * @method \AwsSDK\Result listRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecordsAsync(array $args = [])
 * @method \AwsSDK\Result registerDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDeviceAsync(array $args = [])
 * @method \AwsSDK\Result setCognitoEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCognitoEventsAsync(array $args = [])
 * @method \AwsSDK\Result setIdentityPoolConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityPoolConfigurationAsync(array $args = [])
 * @method \AwsSDK\Result subscribeToDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise subscribeToDatasetAsync(array $args = [])
 * @method \AwsSDK\Result unsubscribeFromDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unsubscribeFromDatasetAsync(array $args = [])
 * @method \AwsSDK\Result updateRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecordsAsync(array $args = [])
 */
class CognitoSyncClient extends AwsClient {}
