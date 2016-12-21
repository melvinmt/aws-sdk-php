<?php
namespace AwsSDK\Shield;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Shield** service.
 * @method \AwsSDK\Result createProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProtectionAsync(array $args = [])
 * @method \AwsSDK\Result createSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionAsync(array $args = [])
 * @method \AwsSDK\Result deleteProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProtectionAsync(array $args = [])
 * @method \AwsSDK\Result deleteSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionAsync(array $args = [])
 * @method \AwsSDK\Result describeAttack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackAsync(array $args = [])
 * @method \AwsSDK\Result describeProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionAsync(array $args = [])
 * @method \AwsSDK\Result describeSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionAsync(array $args = [])
 * @method \AwsSDK\Result listAttacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttacksAsync(array $args = [])
 * @method \AwsSDK\Result listProtections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectionsAsync(array $args = [])
 */
class ShieldClient extends AwsClient {}
