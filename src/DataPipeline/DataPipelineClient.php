<?php
namespace AwsSDK\DataPipeline;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Data Pipeline** service.
 *
 * @method \AwsSDK\Result activatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activatePipelineAsync(array $args = [])
 * @method \AwsSDK\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \AwsSDK\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \AwsSDK\Result deactivatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivatePipelineAsync(array $args = [])
 * @method \AwsSDK\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \AwsSDK\Result describeObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeObjectsAsync(array $args = [])
 * @method \AwsSDK\Result describePipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePipelinesAsync(array $args = [])
 * @method \AwsSDK\Result evaluateExpression(array $args = [])
 * @method \GuzzleHttp\Promise\Promise evaluateExpressionAsync(array $args = [])
 * @method \AwsSDK\Result getPipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineDefinitionAsync(array $args = [])
 * @method \AwsSDK\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \AwsSDK\Result pollForTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForTaskAsync(array $args = [])
 * @method \AwsSDK\Result putPipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPipelineDefinitionAsync(array $args = [])
 * @method \AwsSDK\Result queryObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryObjectsAsync(array $args = [])
 * @method \AwsSDK\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \AwsSDK\Result reportTaskProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportTaskProgressAsync(array $args = [])
 * @method \AwsSDK\Result reportTaskRunnerHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportTaskRunnerHeartbeatAsync(array $args = [])
 * @method \AwsSDK\Result setStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setStatusAsync(array $args = [])
 * @method \AwsSDK\Result setTaskStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTaskStatusAsync(array $args = [])
 * @method \AwsSDK\Result validatePipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validatePipelineDefinitionAsync(array $args = [])
 */
class DataPipelineClient extends AwsClient {}
