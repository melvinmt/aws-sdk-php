<?php
namespace AwsSDK\Route53;

use AwsSDK\AwsClient;
use AwsSDK\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Route 53** service.
 *
 * @method \AwsSDK\Result associateVPCWithHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateVPCWithHostedZoneAsync(array $args = [])
 * @method \AwsSDK\Result changeResourceRecordSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeResourceRecordSetsAsync(array $args = [])
 * @method \AwsSDK\Result changeTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeTagsForResourceAsync(array $args = [])
 * @method \AwsSDK\Result createHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHealthCheckAsync(array $args = [])
 * @method \AwsSDK\Result createHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHostedZoneAsync(array $args = [])
 * @method \AwsSDK\Result createReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReusableDelegationSetAsync(array $args = [])
 * @method \AwsSDK\Result createTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyAsync(array $args = [])
 * @method \AwsSDK\Result createTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyInstanceAsync(array $args = [])
 * @method \AwsSDK\Result createTrafficPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyVersionAsync(array $args = [])
 * @method \AwsSDK\Result createVPCAssociationAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVPCAssociationAuthorizationAsync(array $args = [])
 * @method \AwsSDK\Result deleteHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHealthCheckAsync(array $args = [])
 * @method \AwsSDK\Result deleteHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHostedZoneAsync(array $args = [])
 * @method \AwsSDK\Result deleteReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReusableDelegationSetAsync(array $args = [])
 * @method \AwsSDK\Result deleteTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrafficPolicyAsync(array $args = [])
 * @method \AwsSDK\Result deleteTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrafficPolicyInstanceAsync(array $args = [])
 * @method \AwsSDK\Result deleteVPCAssociationAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVPCAssociationAuthorizationAsync(array $args = [])
 * @method \AwsSDK\Result disassociateVPCFromHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateVPCFromHostedZoneAsync(array $args = [])
 * @method \AwsSDK\Result getChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeAsync(array $args = [])
 * @method \AwsSDK\Result getCheckerIpRanges(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCheckerIpRangesAsync(array $args = [])
 * @method \AwsSDK\Result getGeoLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGeoLocationAsync(array $args = [])
 * @method \AwsSDK\Result getHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckAsync(array $args = [])
 * @method \AwsSDK\Result getHealthCheckCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckCountAsync(array $args = [])
 * @method \AwsSDK\Result getHealthCheckLastFailureReason(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckLastFailureReasonAsync(array $args = [])
 * @method \AwsSDK\Result getHealthCheckStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckStatusAsync(array $args = [])
 * @method \AwsSDK\Result getHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostedZoneAsync(array $args = [])
 * @method \AwsSDK\Result getHostedZoneCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostedZoneCountAsync(array $args = [])
 * @method \AwsSDK\Result getReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReusableDelegationSetAsync(array $args = [])
 * @method \AwsSDK\Result getTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyAsync(array $args = [])
 * @method \AwsSDK\Result getTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyInstanceAsync(array $args = [])
 * @method \AwsSDK\Result getTrafficPolicyInstanceCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyInstanceCountAsync(array $args = [])
 * @method \AwsSDK\Result listGeoLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGeoLocationsAsync(array $args = [])
 * @method \AwsSDK\Result listHealthChecks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHealthChecksAsync(array $args = [])
 * @method \AwsSDK\Result listHostedZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostedZonesAsync(array $args = [])
 * @method \AwsSDK\Result listHostedZonesByName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostedZonesByNameAsync(array $args = [])
 * @method \AwsSDK\Result listResourceRecordSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceRecordSetsAsync(array $args = [])
 * @method \AwsSDK\Result listReusableDelegationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReusableDelegationSetsAsync(array $args = [])
 * @method \AwsSDK\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \AwsSDK\Result listTagsForResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourcesAsync(array $args = [])
 * @method \AwsSDK\Result listTrafficPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPoliciesAsync(array $args = [])
 * @method \AwsSDK\Result listTrafficPolicyInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesAsync(array $args = [])
 * @method \AwsSDK\Result listTrafficPolicyInstancesByHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesByHostedZoneAsync(array $args = [])
 * @method \AwsSDK\Result listTrafficPolicyInstancesByPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesByPolicyAsync(array $args = [])
 * @method \AwsSDK\Result listTrafficPolicyVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyVersionsAsync(array $args = [])
 * @method \AwsSDK\Result listVPCAssociationAuthorizations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVPCAssociationAuthorizationsAsync(array $args = [])
 * @method \AwsSDK\Result testDNSAnswer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testDNSAnswerAsync(array $args = [])
 * @method \AwsSDK\Result updateHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHealthCheckAsync(array $args = [])
 * @method \AwsSDK\Result updateHostedZoneComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHostedZoneCommentAsync(array $args = [])
 * @method \AwsSDK\Result updateTrafficPolicyComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrafficPolicyCommentAsync(array $args = [])
 * @method \AwsSDK\Result updateTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrafficPolicyInstanceAsync(array $args = [])
 */
class Route53Client extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->getHandlerList()->appendInit($this->cleanIdFn(), 'route53.clean_id');
    }

    private function cleanIdFn()
    {
        return function (callable $handler) {
            return function (CommandInterface $c, RequestInterface $r = null) use ($handler) {
                foreach (['Id', 'HostedZoneId', 'DelegationSetId'] as $clean) {
                    if ($c->hasParam($clean)) {
                        $c[$clean] = $this->cleanId($c[$clean]);
                    }
                }
                return $handler($c, $r);
            };
        };
    }

    private function cleanId($id)
    {
        static $toClean = ['/hostedzone/', '/change/', '/delegationset/'];

        return str_replace($toClean, '', $id);
    }
}
