<?php
namespace Aws;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method \AwsSDK\Acm\AcmClient createAcm(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method \AwsSDK\ApiGateway\ApiGatewayClient createApiGateway(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method \AwsSDK\ApplicationAutoScaling\ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method \AwsSDK\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method \AwsSDK\Appstream\AppstreamClient createAppstream(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method \AwsSDK\AutoScaling\AutoScalingClient createAutoScaling(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method \AwsSDK\Batch\BatchClient createBatch(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method \AwsSDK\Budgets\BudgetsClient createBudgets(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method \AwsSDK\CloudFormation\CloudFormationClient createCloudFormation(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method \AwsSDK\CloudFront\CloudFrontClient createCloudFront(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method \AwsSDK\CloudHsm\CloudHsmClient createCloudHsm(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method \AwsSDK\CloudSearch\CloudSearchClient createCloudSearch(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method \AwsSDK\CloudSearchDomain\CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method \AwsSDK\CloudTrail\CloudTrailClient createCloudTrail(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method \AwsSDK\CloudWatch\CloudWatchClient createCloudWatch(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method \AwsSDK\CloudWatchEvents\CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method \AwsSDK\CloudWatchLogs\CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method \AwsSDK\CodeBuild\CodeBuildClient createCodeBuild(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method \AwsSDK\CodeCommit\CodeCommitClient createCodeCommit(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method \AwsSDK\CodeDeploy\CodeDeployClient createCodeDeploy(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method \AwsSDK\CodePipeline\CodePipelineClient createCodePipeline(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method \AwsSDK\CognitoIdentity\CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method \AwsSDK\CognitoIdentityProvider\CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method \AwsSDK\CognitoSync\CognitoSyncClient createCognitoSync(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method \AwsSDK\ConfigService\ConfigServiceClient createConfigService(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method \AwsSDK\DataPipeline\DataPipelineClient createDataPipeline(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method \AwsSDK\DatabaseMigrationService\DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method \AwsSDK\DeviceFarm\DeviceFarmClient createDeviceFarm(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method \AwsSDK\DirectConnect\DirectConnectClient createDirectConnect(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method \AwsSDK\DirectoryService\DirectoryServiceClient createDirectoryService(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method \AwsSDK\DynamoDb\DynamoDbClient createDynamoDb(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method \AwsSDK\DynamoDbStreams\DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method \AwsSDK\Ec2\Ec2Client createEc2(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method \AwsSDK\Ecr\EcrClient createEcr(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method \AwsSDK\Ecs\EcsClient createEcs(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method \AwsSDK\Efs\EfsClient createEfs(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method \AwsSDK\ElastiCache\ElastiCacheClient createElastiCache(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method \AwsSDK\ElasticBeanstalk\ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method \AwsSDK\ElasticLoadBalancing\ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method \AwsSDK\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method \AwsSDK\ElasticTranscoder\ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method \AwsSDK\ElasticsearchService\ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method \AwsSDK\Emr\EmrClient createEmr(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method \AwsSDK\Firehose\FirehoseClient createFirehose(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method \AwsSDK\GameLift\GameLiftClient createGameLift(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method \AwsSDK\Glacier\GlacierClient createGlacier(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method \AwsSDK\Health\HealthClient createHealth(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method \AwsSDK\Iam\IamClient createIam(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionIam(array $args = [])
 * @method \AwsSDK\ImportExport\ImportExportClient createImportExport(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method \AwsSDK\Inspector\InspectorClient createInspector(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method \AwsSDK\Iot\IotClient createIot(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionIot(array $args = [])
 * @method \AwsSDK\IotDataPlane\IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method \AwsSDK\Kinesis\KinesisClient createKinesis(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method \AwsSDK\KinesisAnalytics\KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method \AwsSDK\Kms\KmsClient createKms(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionKms(array $args = [])
 * @method \AwsSDK\Lambda\LambdaClient createLambda(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method \AwsSDK\Lightsail\LightsailClient createLightsail(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method \AwsSDK\MachineLearning\MachineLearningClient createMachineLearning(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method \AwsSDK\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method \AwsSDK\MarketplaceMetering\MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method \AwsSDK\OpsWorks\OpsWorksClient createOpsWorks(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method \AwsSDK\OpsWorksCM\OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method \AwsSDK\Pinpoint\PinpointClient createPinpoint(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method \AwsSDK\Polly\PollyClient createPolly(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method \AwsSDK\Rds\RdsClient createRds(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionRds(array $args = [])
 * @method \AwsSDK\Redshift\RedshiftClient createRedshift(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method \AwsSDK\Rekognition\RekognitionClient createRekognition(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method \AwsSDK\Route53\Route53Client createRoute53(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method \AwsSDK\Route53Domains\Route53DomainsClient createRoute53Domains(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method \AwsSDK\S3\S3Client createS3(array $args = [])
 * @method \AwsSDK\S3\S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method \AwsSDK\ServiceCatalog\ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method \AwsSDK\Ses\SesClient createSes(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSes(array $args = [])
 * @method \AwsSDK\Sfn\SfnClient createSfn(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method \AwsSDK\Shield\ShieldClient createShield(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionShield(array $args = [])
 * @method \AwsSDK\Sms\SmsClient createSms(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSms(array $args = [])
 * @method \AwsSDK\SnowBall\SnowBallClient createSnowBall(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method \AwsSDK\Sns\SnsClient createSns(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSns(array $args = [])
 * @method \AwsSDK\Sqs\SqsClient createSqs(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method \AwsSDK\Ssm\SsmClient createSsm(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method \AwsSDK\StorageGateway\StorageGatewayClient createStorageGateway(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method \AwsSDK\Sts\StsClient createSts(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSts(array $args = [])
 * @method \AwsSDK\Support\SupportClient createSupport(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method \AwsSDK\Swf\SwfClient createSwf(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method \AwsSDK\Waf\WafClient createWaf(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method \AwsSDK\WafRegional\WafRegionalClient createWafRegional(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method \AwsSDK\WorkSpaces\WorkSpacesClient createWorkSpaces(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method \AwsSDK\XRay\XRayClient createXRay(array $args = [])
 * @method \AwsSDK\MultiRegionClient createMultiRegionXRay(array $args = [])
 */
class Sdk
{
    const VERSION = '3.20.9';

    /** @var array Arguments for creating clients */
    private $args;

    /**
     * Constructs a new SDK object with an associative array of default
     * client settings.
     *
     * @param array $args
     *
     * @throws \InvalidArgumentException
     * @see AwsSDK\AwsClient::__construct for a list of available options.
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;

        if (!isset($args['handler']) && !isset($args['http_handler'])) {
            $this->args['http_handler'] = default_http_handler();
        }
    }

    public function __call($name, array $args)
    {
        $args = isset($args[0]) ? $args[0] : [];
        if (strpos($name, 'createMultiRegion') === 0) {
            return $this->createMultiRegionClient(substr($name, 17), $args);
        } elseif (strpos($name, 'create') === 0) {
            return $this->createClient(substr($name, 6), $args);
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Get a client by name using an array of constructor options.
     *
     * @param string $name Service name or namespace (e.g., DynamoDb, s3).
     * @param array  $args Arguments to configure the client.
     *
     * @return AwsClientInterface
     * @throws \InvalidArgumentException if any required options are missing or
     *                                   the service is not supported.
     * @see AwsSDK\AwsClient::__construct for a list of available options for args.
     */
    public function createClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        // Instantiate the client class.
        $client = "AwsSDK\\{$namespace}\\{$namespace}Client";
        return new $client($this->mergeArgs($namespace, $service, $args));
    }

    public function createMultiRegionClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        $klass = "AwsSDK\\{$namespace}\\{$namespace}MultiRegionClient";
        $klass = class_exists($klass) ? $klass : 'AwsSDK\\MultiRegionClient';

        return new $klass($this->mergeArgs($namespace, $service, $args));
    }

    private function mergeArgs($namespace, array $manifest, array $args = [])
    {
        // Merge provided args with stored, service-specific args.
        if (isset($this->args[$namespace])) {
            $args += $this->args[$namespace];
        }

        // Provide the endpoint prefix in the args.
        if (!isset($args['service'])) {
            $args['service'] = $manifest['endpoint'];
        }

        return $args + $this->args;
    }

    /**
     * Determine the endpoint prefix from a client namespace.
     *
     * @param string $name Namespace name
     *
     * @return string
     * @internal
     * @deprecated Use the `\AwsSDK\manifest()` function instead.
     */
    public static function getEndpointPrefix($name)
    {
        return manifest($name)['endpoint'];
    }
}
