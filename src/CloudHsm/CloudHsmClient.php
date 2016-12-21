<?php
namespace AwsSDK\CloudHsm;

use AwsSDK\Api\ApiProvider;
use AwsSDK\Api\DocModel;
use AwsSDK\Api\Service;
use AwsSDK\AwsClient;

/**
 * This client is used to interact with **AWS CloudHSM**.
 *
 * @method \AwsSDK\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \AwsSDK\Result createHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHapgAsync(array $args = [])
 * @method \AwsSDK\Result createHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmAsync(array $args = [])
 * @method \AwsSDK\Result createLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLunaClientAsync(array $args = [])
 * @method \AwsSDK\Result deleteHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHapgAsync(array $args = [])
 * @method \AwsSDK\Result deleteHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmAsync(array $args = [])
 * @method \AwsSDK\Result deleteLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLunaClientAsync(array $args = [])
 * @method \AwsSDK\Result describeHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHapgAsync(array $args = [])
 * @method \AwsSDK\Result describeHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHsmAsync(array $args = [])
 * @method \AwsSDK\Result describeLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLunaClientAsync(array $args = [])
 * @method \AwsSDK\Result getConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigAsync(array $args = [])
 * @method \AwsSDK\Result listAvailableZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableZonesAsync(array $args = [])
 * @method \AwsSDK\Result listHapgs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHapgsAsync(array $args = [])
 * @method \AwsSDK\Result listHsms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHsmsAsync(array $args = [])
 * @method \AwsSDK\Result listLunaClients(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLunaClientsAsync(array $args = [])
 * @method \AwsSDK\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \AwsSDK\Result modifyHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyHapgAsync(array $args = [])
 * @method \AwsSDK\Result modifyHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyHsmAsync(array $args = [])
 * @method \AwsSDK\Result modifyLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLunaClientAsync(array $args = [])
 * @method \AwsSDK\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 */
class CloudHsmClient extends AwsClient
{
    public function __call($name, array $args)
    {
        // Overcomes a naming collision with `AwsClient::getConfig`.
        if (lcfirst($name) === 'getConfigFiles') {
            $name = 'GetConfig';
        } elseif (lcfirst($name) === 'getConfigFilesAsync') {
            $name = 'GetConfigAsync';
        }

        return parent::__call($name, $args);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        // Overcomes a naming collision with `AwsClient::getConfig`.
        $api['operations']['GetConfigFiles'] = $api['operations']['GetConfig'];
        $docs['operations']['GetConfigFiles'] = $docs['operations']['GetConfig'];
        unset($api['operations']['GetConfig'], $docs['operations']['GetConfig']);
        ksort($api['operations']);

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
