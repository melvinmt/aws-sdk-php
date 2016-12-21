<?php
namespace AwsSDK\ImportExport;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Import/Export** service.
 * @method \AwsSDK\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \AwsSDK\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \AwsSDK\Result getShippingLabel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShippingLabelAsync(array $args = [])
 * @method \AwsSDK\Result getStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStatusAsync(array $args = [])
 * @method \AwsSDK\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \AwsSDK\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class ImportExportClient extends AwsClient {}
