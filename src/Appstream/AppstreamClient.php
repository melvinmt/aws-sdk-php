<?php
namespace AwsSDK\Appstream;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon AppStream** service.
 * @method \AwsSDK\Result associateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateFleetAsync(array $args = [])
 * @method \AwsSDK\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \AwsSDK\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \AwsSDK\Result createStreamingURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamingURLAsync(array $args = [])
 * @method \AwsSDK\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \AwsSDK\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \AwsSDK\Result describeFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetsAsync(array $args = [])
 * @method \AwsSDK\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \AwsSDK\Result describeSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSessionsAsync(array $args = [])
 * @method \AwsSDK\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \AwsSDK\Result disassociateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFleetAsync(array $args = [])
 * @method \AwsSDK\Result expireSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise expireSessionAsync(array $args = [])
 * @method \AwsSDK\Result listAssociatedFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedFleetsAsync(array $args = [])
 * @method \AwsSDK\Result listAssociatedStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedStacksAsync(array $args = [])
 * @method \AwsSDK\Result startFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFleetAsync(array $args = [])
 * @method \AwsSDK\Result stopFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFleetAsync(array $args = [])
 * @method \AwsSDK\Result updateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetAsync(array $args = [])
 * @method \AwsSDK\Result updateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackAsync(array $args = [])
 */
class AppstreamClient extends AwsClient {}
