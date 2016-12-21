<?php
namespace AwsSDK\WorkSpaces;

use AwsSDK\AwsClient;

/**
 * Amazon WorkSpaces client.
 *
 * @method \AwsSDK\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \AwsSDK\Result createWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspacesAsync(array $args = [])
 * @method \AwsSDK\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \AwsSDK\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \AwsSDK\Result describeWorkspaceBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceBundlesAsync(array $args = [])
 * @method \AwsSDK\Result describeWorkspaceDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceDirectoriesAsync(array $args = [])
 * @method \AwsSDK\Result describeWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesAsync(array $args = [])
 * @method \AwsSDK\Result describeWorkspacesConnectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesConnectionStatusAsync(array $args = [])
 * @method \AwsSDK\Result modifyWorkspaceProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspacePropertiesAsync(array $args = [])
 * @method \AwsSDK\Result rebootWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootWorkspacesAsync(array $args = [])
 * @method \AwsSDK\Result rebuildWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildWorkspacesAsync(array $args = [])
 * @method \AwsSDK\Result startWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startWorkspacesAsync(array $args = [])
 * @method \AwsSDK\Result stopWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopWorkspacesAsync(array $args = [])
 * @method \AwsSDK\Result terminateWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateWorkspacesAsync(array $args = [])
 */
class WorkSpacesClient extends AwsClient {}
