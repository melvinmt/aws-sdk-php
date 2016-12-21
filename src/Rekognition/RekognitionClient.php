<?php
namespace AwsSDK\Rekognition;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Rekognition** service.
 * @method \AwsSDK\Result compareFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise compareFacesAsync(array $args = [])
 * @method \AwsSDK\Result createCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCollectionAsync(array $args = [])
 * @method \AwsSDK\Result deleteCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCollectionAsync(array $args = [])
 * @method \AwsSDK\Result deleteFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFacesAsync(array $args = [])
 * @method \AwsSDK\Result detectFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectFacesAsync(array $args = [])
 * @method \AwsSDK\Result detectLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectLabelsAsync(array $args = [])
 * @method \AwsSDK\Result indexFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise indexFacesAsync(array $args = [])
 * @method \AwsSDK\Result listCollections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollectionsAsync(array $args = [])
 * @method \AwsSDK\Result listFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFacesAsync(array $args = [])
 * @method \AwsSDK\Result searchFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFacesAsync(array $args = [])
 * @method \AwsSDK\Result searchFacesByImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFacesByImageAsync(array $args = [])
 */
class RekognitionClient extends AwsClient {}
