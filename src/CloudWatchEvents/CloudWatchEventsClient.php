<?php
namespace AwsSDK\CloudWatchEvents;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Events** service.
 *
 * @method \AwsSDK\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \AwsSDK\Result describeRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuleAsync(array $args = [])
 * @method \AwsSDK\Result disableRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRuleAsync(array $args = [])
 * @method \AwsSDK\Result enableRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRuleAsync(array $args = [])
 * @method \AwsSDK\Result listRuleNamesByTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRuleNamesByTargetAsync(array $args = [])
 * @method \AwsSDK\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \AwsSDK\Result listTargetsByRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsByRuleAsync(array $args = [])
 * @method \AwsSDK\Result putEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventsAsync(array $args = [])
 * @method \AwsSDK\Result putRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRuleAsync(array $args = [])
 * @method \AwsSDK\Result putTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTargetsAsync(array $args = [])
 * @method \AwsSDK\Result removeTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTargetsAsync(array $args = [])
 * @method \AwsSDK\Result testEventPattern(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testEventPatternAsync(array $args = [])
 */
class CloudWatchEventsClient extends AwsClient {}
