<?php
namespace AwsSDK\Batch;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Batch** service.
 * @method \AwsSDK\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \AwsSDK\Result createComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComputeEnvironmentAsync(array $args = [])
 * @method \AwsSDK\Result createJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobQueueAsync(array $args = [])
 * @method \AwsSDK\Result deleteComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComputeEnvironmentAsync(array $args = [])
 * @method \AwsSDK\Result deleteJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobQueueAsync(array $args = [])
 * @method \AwsSDK\Result deregisterJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterJobDefinitionAsync(array $args = [])
 * @method \AwsSDK\Result describeComputeEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComputeEnvironmentsAsync(array $args = [])
 * @method \AwsSDK\Result describeJobDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobDefinitionsAsync(array $args = [])
 * @method \AwsSDK\Result describeJobQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobQueuesAsync(array $args = [])
 * @method \AwsSDK\Result describeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \AwsSDK\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \AwsSDK\Result registerJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerJobDefinitionAsync(array $args = [])
 * @method \AwsSDK\Result submitJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitJobAsync(array $args = [])
 * @method \AwsSDK\Result terminateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateJobAsync(array $args = [])
 * @method \AwsSDK\Result updateComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateComputeEnvironmentAsync(array $args = [])
 * @method \AwsSDK\Result updateJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobQueueAsync(array $args = [])
 */
class BatchClient extends AwsClient {}
