<?php
namespace AwsSDK\ApplicationAutoScaling;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Application Auto Scaling** service.
 * @method \AwsSDK\Result deleteScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPolicyAsync(array $args = [])
 * @method \AwsSDK\Result deregisterScalableTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterScalableTargetAsync(array $args = [])
 * @method \AwsSDK\Result describeScalableTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalableTargetsAsync(array $args = [])
 * @method \AwsSDK\Result describeScalingActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \AwsSDK\Result describeScalingPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPoliciesAsync(array $args = [])
 * @method \AwsSDK\Result putScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \AwsSDK\Result registerScalableTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerScalableTargetAsync(array $args = [])
 */
class ApplicationAutoScalingClient extends AwsClient {}
