<?php
namespace AwsSDK\Efs;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with **Amazon EFS**.
 *
 * @method \AwsSDK\Result createFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFileSystemAsync(array $args = [])
 * @method \AwsSDK\Result createMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMountTargetAsync(array $args = [])
 * @method \AwsSDK\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \AwsSDK\Result deleteFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileSystemAsync(array $args = [])
 * @method \AwsSDK\Result deleteMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMountTargetAsync(array $args = [])
 * @method \AwsSDK\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \AwsSDK\Result describeFileSystems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemsAsync(array $args = [])
 * @method \AwsSDK\Result describeMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetSecurityGroupsAsync(array $args = [])
 * @method \AwsSDK\Result describeMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetsAsync(array $args = [])
 * @method \AwsSDK\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \AwsSDK\Result modifyMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMountTargetSecurityGroupsAsync(array $args = [])
 */
class EfsClient extends AwsClient {}
