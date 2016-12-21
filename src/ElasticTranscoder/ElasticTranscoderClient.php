<?php
namespace AwsSDK\ElasticTranscoder;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Transcoder** service.
 *
 * @method \AwsSDK\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \AwsSDK\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \AwsSDK\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \AwsSDK\Result createPreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPresetAsync(array $args = [])
 * @method \AwsSDK\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \AwsSDK\Result deletePreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePresetAsync(array $args = [])
 * @method \AwsSDK\Result listJobsByPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsByPipelineAsync(array $args = [])
 * @method \AwsSDK\Result listJobsByStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsByStatusAsync(array $args = [])
 * @method \AwsSDK\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \AwsSDK\Result listPresets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPresetsAsync(array $args = [])
 * @method \AwsSDK\Result readJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readJobAsync(array $args = [])
 * @method \AwsSDK\Result readPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readPipelineAsync(array $args = [])
 * @method \AwsSDK\Result readPreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readPresetAsync(array $args = [])
 * @method \AwsSDK\Result testRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRoleAsync(array $args = [])
 * @method \AwsSDK\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 * @method \AwsSDK\Result updatePipelineNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineNotificationsAsync(array $args = [])
 * @method \AwsSDK\Result updatePipelineStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineStatusAsync(array $args = [])
 */
class ElasticTranscoderClient extends AwsClient {}
