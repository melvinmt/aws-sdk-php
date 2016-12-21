<?php
namespace AwsSDK\ElasticsearchService;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Elasticsearch Service** service.
 *
 * @method \AwsSDK\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \AwsSDK\Result createElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createElasticsearchDomainAsync(array $args = [])
 * @method \AwsSDK\Result deleteElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteElasticsearchDomainAsync(array $args = [])
 * @method \AwsSDK\Result describeElasticsearchDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainAsync(array $args = [])
 * @method \AwsSDK\Result describeElasticsearchDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainConfigAsync(array $args = [])
 * @method \AwsSDK\Result describeElasticsearchDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeElasticsearchDomainsAsync(array $args = [])
 * @method \AwsSDK\Result listDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainNamesAsync(array $args = [])
 * @method \AwsSDK\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \AwsSDK\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \AwsSDK\Result updateElasticsearchDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateElasticsearchDomainConfigAsync(array $args = [])
 */
class ElasticsearchServiceClient extends AwsClient {}
