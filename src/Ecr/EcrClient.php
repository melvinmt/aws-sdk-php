<?php
namespace AwsSDK\Ecr;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon EC2 Container Registry** service.
 *
 * @method \AwsSDK\Result batchCheckLayerAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCheckLayerAvailabilityAsync(array $args = [])
 * @method \AwsSDK\Result batchDeleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteImageAsync(array $args = [])
 * @method \AwsSDK\Result batchGetImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetImageAsync(array $args = [])
 * @method \AwsSDK\Result completeLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeLayerUploadAsync(array $args = [])
 * @method \AwsSDK\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \AwsSDK\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \AwsSDK\Result deleteRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryPolicyAsync(array $args = [])
 * @method \AwsSDK\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \AwsSDK\Result describeRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoriesAsync(array $args = [])
 * @method \AwsSDK\Result getAuthorizationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \AwsSDK\Result getDownloadUrlForLayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDownloadUrlForLayerAsync(array $args = [])
 * @method \AwsSDK\Result getRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryPolicyAsync(array $args = [])
 * @method \AwsSDK\Result initiateLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateLayerUploadAsync(array $args = [])
 * @method \AwsSDK\Result listImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagesAsync(array $args = [])
 * @method \AwsSDK\Result putImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageAsync(array $args = [])
 * @method \AwsSDK\Result setRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRepositoryPolicyAsync(array $args = [])
 * @method \AwsSDK\Result uploadLayerPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadLayerPartAsync(array $args = [])
 */
class EcrClient extends AwsClient {}
