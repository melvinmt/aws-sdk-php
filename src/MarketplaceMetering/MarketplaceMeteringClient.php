<?php
namespace AwsSDK\MarketplaceMetering;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWSMarketplace Metering** service.
 * @method \AwsSDK\Result batchMeterUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchMeterUsageAsync(array $args = [])
 * @method \AwsSDK\Result meterUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise meterUsageAsync(array $args = [])
 * @method \AwsSDK\Result resolveCustomer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveCustomerAsync(array $args = [])
 */
class MarketplaceMeteringClient extends AwsClient {}
