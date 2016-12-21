<?php
namespace AwsSDK\ApplicationDiscoveryService;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Application Discovery Service** service.
 * @method \AwsSDK\Result associateConfigurationItemsToApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConfigurationItemsToApplicationAsync(array $args = [])
 * @method \AwsSDK\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \AwsSDK\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \AwsSDK\Result deleteApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationsAsync(array $args = [])
 * @method \AwsSDK\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \AwsSDK\Result describeAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentsAsync(array $args = [])
 * @method \AwsSDK\Result describeConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationsAsync(array $args = [])
 * @method \AwsSDK\Result describeExportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportConfigurationsAsync(array $args = [])
 * @method \AwsSDK\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \AwsSDK\Result disassociateConfigurationItemsFromApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConfigurationItemsFromApplicationAsync(array $args = [])
 * @method \AwsSDK\Result exportConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportConfigurationsAsync(array $args = [])
 * @method \AwsSDK\Result getDiscoverySummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiscoverySummaryAsync(array $args = [])
 * @method \AwsSDK\Result listConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \AwsSDK\Result listServerNeighbors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServerNeighborsAsync(array $args = [])
 * @method \AwsSDK\Result startDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataCollectionByAgentIdsAsync(array $args = [])
 * @method \AwsSDK\Result stopDataCollectionByAgentIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDataCollectionByAgentIdsAsync(array $args = [])
 * @method \AwsSDK\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ApplicationDiscoveryServiceClient extends AwsClient {}
