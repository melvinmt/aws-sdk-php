<?php
namespace AwsSDK\IotDataPlane;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Data Plane** service.
 *
 * @method \AwsSDK\Result deleteThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingShadowAsync(array $args = [])
 * @method \AwsSDK\Result getThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThingShadowAsync(array $args = [])
 * @method \AwsSDK\Result publish(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishAsync(array $args = [])
 * @method \AwsSDK\Result updateThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingShadowAsync(array $args = [])
 */
class IotDataPlaneClient extends AwsClient {}
