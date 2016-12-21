<?php
namespace AwsSDK\KinesisAnalytics;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Analytics** service.
 * @method \AwsSDK\Result addApplicationInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationInputAsync(array $args = [])
 * @method \AwsSDK\Result addApplicationOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationOutputAsync(array $args = [])
 * @method \AwsSDK\Result addApplicationReferenceDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationReferenceDataSourceAsync(array $args = [])
 * @method \AwsSDK\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \AwsSDK\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \AwsSDK\Result deleteApplicationOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationOutputAsync(array $args = [])
 * @method \AwsSDK\Result deleteApplicationReferenceDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationReferenceDataSourceAsync(array $args = [])
 * @method \AwsSDK\Result describeApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationAsync(array $args = [])
 * @method \AwsSDK\Result discoverInputSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discoverInputSchemaAsync(array $args = [])
 * @method \AwsSDK\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \AwsSDK\Result startApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startApplicationAsync(array $args = [])
 * @method \AwsSDK\Result stopApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopApplicationAsync(array $args = [])
 * @method \AwsSDK\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class KinesisAnalyticsClient extends AwsClient {}
