<?php
namespace AwsSDK\CodeCommit;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS CodeCommit** service.
 *
 * @method \AwsSDK\Result batchGetRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRepositoriesAsync(array $args = [])
 * @method \AwsSDK\Result createBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBranchAsync(array $args = [])
 * @method \AwsSDK\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \AwsSDK\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \AwsSDK\Result getBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBranchAsync(array $args = [])
 * @method \AwsSDK\Result getCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommitAsync(array $args = [])
 * @method \AwsSDK\Result getRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryAsync(array $args = [])
 * @method \AwsSDK\Result getRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryTriggersAsync(array $args = [])
 * @method \AwsSDK\Result listBranches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBranchesAsync(array $args = [])
 * @method \AwsSDK\Result listRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoriesAsync(array $args = [])
 * @method \AwsSDK\Result putRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRepositoryTriggersAsync(array $args = [])
 * @method \AwsSDK\Result testRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRepositoryTriggersAsync(array $args = [])
 * @method \AwsSDK\Result updateDefaultBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDefaultBranchAsync(array $args = [])
 * @method \AwsSDK\Result updateRepositoryDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryDescriptionAsync(array $args = [])
 * @method \AwsSDK\Result updateRepositoryName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryNameAsync(array $args = [])
 */
class CodeCommitClient extends AwsClient {}
