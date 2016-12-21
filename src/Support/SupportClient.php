<?php
namespace AwsSDK\Support;

use AwsSDK\AwsClient;

/**
 * AWS Support client.
 *
 * @method \AwsSDK\Result addAttachmentsToSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addAttachmentsToSetAsync(array $args = [])
 * @method \AwsSDK\Result addCommunicationToCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCommunicationToCaseAsync(array $args = [])
 * @method \AwsSDK\Result createCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCaseAsync(array $args = [])
 * @method \AwsSDK\Result describeAttachment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttachmentAsync(array $args = [])
 * @method \AwsSDK\Result describeCases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCasesAsync(array $args = [])
 * @method \AwsSDK\Result describeCommunications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCommunicationsAsync(array $args = [])
 * @method \AwsSDK\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \AwsSDK\Result describeSeverityLevels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSeverityLevelsAsync(array $args = [])
 * @method \AwsSDK\Result describeTrustedAdvisorCheckRefreshStatuses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckRefreshStatusesAsync(array $args = [])
 * @method \AwsSDK\Result describeTrustedAdvisorCheckResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckResultAsync(array $args = [])
 * @method \AwsSDK\Result describeTrustedAdvisorCheckSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckSummariesAsync(array $args = [])
 * @method \AwsSDK\Result describeTrustedAdvisorChecks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorChecksAsync(array $args = [])
 * @method \AwsSDK\Result refreshTrustedAdvisorCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshTrustedAdvisorCheckAsync(array $args = [])
 * @method \AwsSDK\Result resolveCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveCaseAsync(array $args = [])
 */
class SupportClient extends AwsClient {}
