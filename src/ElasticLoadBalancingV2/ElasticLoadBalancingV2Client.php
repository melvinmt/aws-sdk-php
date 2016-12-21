<?php
namespace AwsSDK\ElasticLoadBalancingV2;

use AwsSDK\AwsClient;
use AwsSDK\Command;
use AwsSDK\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Elastic Load Balancing** service.
 * @method \AwsSDK\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \AwsSDK\Result createListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createListenerAsync(array $args = [])
 * @method \AwsSDK\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \AwsSDK\Result createRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \AwsSDK\Result createTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTargetGroupAsync(array $args = [])
 * @method \AwsSDK\Result deleteListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteListenerAsync(array $args = [])
 * @method \AwsSDK\Result deleteLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerAsync(array $args = [])
 * @method \AwsSDK\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \AwsSDK\Result deleteTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTargetGroupAsync(array $args = [])
 * @method \AwsSDK\Result deregisterTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTargetsAsync(array $args = [])
 * @method \AwsSDK\Result describeListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeListenersAsync(array $args = [])
 * @method \AwsSDK\Result describeLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerAttributesAsync(array $args = [])
 * @method \AwsSDK\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \AwsSDK\Result describeRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRulesAsync(array $args = [])
 * @method \AwsSDK\Result describeSSLPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSSLPoliciesAsync(array $args = [])
 * @method \AwsSDK\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \AwsSDK\Result describeTargetGroupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetGroupAttributesAsync(array $args = [])
 * @method \AwsSDK\Result describeTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetGroupsAsync(array $args = [])
 * @method \AwsSDK\Result describeTargetHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetHealthAsync(array $args = [])
 * @method \AwsSDK\Result modifyListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyListenerAsync(array $args = [])
 * @method \AwsSDK\Result modifyLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLoadBalancerAttributesAsync(array $args = [])
 * @method \AwsSDK\Result modifyRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyRuleAsync(array $args = [])
 * @method \AwsSDK\Result modifyTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTargetGroupAsync(array $args = [])
 * @method \AwsSDK\Result modifyTargetGroupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyTargetGroupAttributesAsync(array $args = [])
 * @method \AwsSDK\Result registerTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTargetsAsync(array $args = [])
 * @method \AwsSDK\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \AwsSDK\Result setRulePriorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRulePrioritiesAsync(array $args = [])
 * @method \AwsSDK\Result setSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setSecurityGroupsAsync(array $args = [])
 * @method \AwsSDK\Result setSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setSubnetsAsync(array $args = [])
 */
class ElasticLoadBalancingV2Client extends AwsClient {

    public function __construct(array $args)
    {
        if (!isset($args['signing_name'])) {
            $args['signing_name'] = 'elasticloadbalancing';
        }
        if (!isset($args['endpoint'])) {
            $scheme = isset($args['scheme'])? $args['scheme'] : 'https';
            $args['endpoint'] =
                "{$scheme}://elasticloadbalancing.{$args['region']}.amazonaws.com";
        }

        parent::__construct($args);
    }
}
