<?php
namespace AwsSDK\SnowBall;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Import/Export Snowball** service.
 * @method \AwsSDK\Result cancelCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelClusterAsync(array $args = [])
 * @method \AwsSDK\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \AwsSDK\Result createAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddressAsync(array $args = [])
 * @method \AwsSDK\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \AwsSDK\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \AwsSDK\Result describeAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressAsync(array $args = [])
 * @method \AwsSDK\Result describeAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressesAsync(array $args = [])
 * @method \AwsSDK\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \AwsSDK\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \AwsSDK\Result getJobManifest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobManifestAsync(array $args = [])
 * @method \AwsSDK\Result getJobUnlockCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobUnlockCodeAsync(array $args = [])
 * @method \AwsSDK\Result getSnowballUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnowballUsageAsync(array $args = [])
 * @method \AwsSDK\Result listClusterJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClusterJobsAsync(array $args = [])
 * @method \AwsSDK\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \AwsSDK\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \AwsSDK\Result updateCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \AwsSDK\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class SnowBallClient extends AwsClient {}
