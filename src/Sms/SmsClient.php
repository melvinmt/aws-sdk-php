<?php
namespace AwsSDK\Sms;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Server Migration Service** service.
 * @method \AwsSDK\Result createReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationJobAsync(array $args = [])
 * @method \AwsSDK\Result deleteReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationJobAsync(array $args = [])
 * @method \AwsSDK\Result deleteServerCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerCatalogAsync(array $args = [])
 * @method \AwsSDK\Result disassociateConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConnectorAsync(array $args = [])
 * @method \AwsSDK\Result getConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectorsAsync(array $args = [])
 * @method \AwsSDK\Result getReplicationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationJobsAsync(array $args = [])
 * @method \AwsSDK\Result getReplicationRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationRunsAsync(array $args = [])
 * @method \AwsSDK\Result getServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServersAsync(array $args = [])
 * @method \AwsSDK\Result importServerCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importServerCatalogAsync(array $args = [])
 * @method \AwsSDK\Result startOnDemandReplicationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startOnDemandReplicationRunAsync(array $args = [])
 * @method \AwsSDK\Result updateReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReplicationJobAsync(array $args = [])
 */
class SmsClient extends AwsClient {}
