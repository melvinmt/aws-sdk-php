<?php
namespace AwsSDK\Sfn;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Step Functions** service.
 * @method \AwsSDK\Result createActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivityAsync(array $args = [])
 * @method \AwsSDK\Result createStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStateMachineAsync(array $args = [])
 * @method \AwsSDK\Result deleteActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivityAsync(array $args = [])
 * @method \AwsSDK\Result deleteStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStateMachineAsync(array $args = [])
 * @method \AwsSDK\Result describeActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivityAsync(array $args = [])
 * @method \AwsSDK\Result describeExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExecutionAsync(array $args = [])
 * @method \AwsSDK\Result describeStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStateMachineAsync(array $args = [])
 * @method \AwsSDK\Result getActivityTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActivityTaskAsync(array $args = [])
 * @method \AwsSDK\Result getExecutionHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExecutionHistoryAsync(array $args = [])
 * @method \AwsSDK\Result listActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActivitiesAsync(array $args = [])
 * @method \AwsSDK\Result listExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \AwsSDK\Result listStateMachines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStateMachinesAsync(array $args = [])
 * @method \AwsSDK\Result sendTaskFailure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskFailureAsync(array $args = [])
 * @method \AwsSDK\Result sendTaskHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskHeartbeatAsync(array $args = [])
 * @method \AwsSDK\Result sendTaskSuccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskSuccessAsync(array $args = [])
 * @method \AwsSDK\Result startExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExecutionAsync(array $args = [])
 * @method \AwsSDK\Result stopExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopExecutionAsync(array $args = [])
 */
class SfnClient extends AwsClient {}
