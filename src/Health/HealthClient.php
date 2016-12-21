<?php
namespace AwsSDK\Health;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Health APIs and Notifications** service.
 * @method \AwsSDK\Result describeAffectedEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAffectedEntitiesAsync(array $args = [])
 * @method \AwsSDK\Result describeEntityAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntityAggregatesAsync(array $args = [])
 * @method \AwsSDK\Result describeEventAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventAggregatesAsync(array $args = [])
 * @method \AwsSDK\Result describeEventDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventDetailsAsync(array $args = [])
 * @method \AwsSDK\Result describeEventTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventTypesAsync(array $args = [])
 * @method \AwsSDK\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 */
class HealthClient extends AwsClient {}
