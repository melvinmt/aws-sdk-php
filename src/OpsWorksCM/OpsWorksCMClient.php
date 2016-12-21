<?php
namespace AwsSDK\OpsWorksCM;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS OpsWorks for Chef Automate** service.
 * @method \AwsSDK\Result associateNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateNodeAsync(array $args = [])
 * @method \AwsSDK\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \AwsSDK\Result createServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServerAsync(array $args = [])
 * @method \AwsSDK\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \AwsSDK\Result deleteServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerAsync(array $args = [])
 * @method \AwsSDK\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \AwsSDK\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \AwsSDK\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \AwsSDK\Result describeNodeAssociationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeAssociationStatusAsync(array $args = [])
 * @method \AwsSDK\Result describeServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServersAsync(array $args = [])
 * @method \AwsSDK\Result disassociateNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateNodeAsync(array $args = [])
 * @method \AwsSDK\Result restoreServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreServerAsync(array $args = [])
 * @method \AwsSDK\Result startMaintenance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMaintenanceAsync(array $args = [])
 * @method \AwsSDK\Result updateServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerAsync(array $args = [])
 * @method \AwsSDK\Result updateServerEngineAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerEngineAttributesAsync(array $args = [])
 */
class OpsWorksCMClient extends AwsClient {}
