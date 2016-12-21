<?php
namespace AwsSDK\CodeBuild;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS CodeBuild** service.
 * @method \AwsSDK\Result batchGetBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetBuildsAsync(array $args = [])
 * @method \AwsSDK\Result batchGetProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetProjectsAsync(array $args = [])
 * @method \AwsSDK\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \AwsSDK\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \AwsSDK\Result listBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsAsync(array $args = [])
 * @method \AwsSDK\Result listBuildsForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsForProjectAsync(array $args = [])
 * @method \AwsSDK\Result listCuratedEnvironmentImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCuratedEnvironmentImagesAsync(array $args = [])
 * @method \AwsSDK\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \AwsSDK\Result startBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBuildAsync(array $args = [])
 * @method \AwsSDK\Result stopBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBuildAsync(array $args = [])
 * @method \AwsSDK\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class CodeBuildClient extends AwsClient {}
