<?php
namespace AwsSDK\CognitoIdentity;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Identity** service.
 *
 * @method \AwsSDK\Result createIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIdentityPoolAsync(array $args = [])
 * @method \AwsSDK\Result deleteIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentitiesAsync(array $args = [])
 * @method \AwsSDK\Result deleteIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityPoolAsync(array $args = [])
 * @method \AwsSDK\Result describeIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityAsync(array $args = [])
 * @method \AwsSDK\Result describeIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityPoolAsync(array $args = [])
 * @method \AwsSDK\Result getCredentialsForIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCredentialsForIdentityAsync(array $args = [])
 * @method \AwsSDK\Result getId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdAsync(array $args = [])
 * @method \AwsSDK\Result getIdentityPoolRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoolRolesAsync(array $args = [])
 * @method \AwsSDK\Result getOpenIdToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIdTokenAsync(array $args = [])
 * @method \AwsSDK\Result getOpenIdTokenForDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIdTokenForDeveloperIdentityAsync(array $args = [])
 * @method \AwsSDK\Result listIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentitiesAsync(array $args = [])
 * @method \AwsSDK\Result listIdentityPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoolsAsync(array $args = [])
 * @method \AwsSDK\Result lookupDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupDeveloperIdentityAsync(array $args = [])
 * @method \AwsSDK\Result mergeDeveloperIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeDeveloperIdentitiesAsync(array $args = [])
 * @method \AwsSDK\Result setIdentityPoolRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityPoolRolesAsync(array $args = [])
 * @method \AwsSDK\Result unlinkDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlinkDeveloperIdentityAsync(array $args = [])
 * @method \AwsSDK\Result unlinkIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlinkIdentityAsync(array $args = [])
 * @method \AwsSDK\Result updateIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityPoolAsync(array $args = [])
 */
class CognitoIdentityClient extends AwsClient {}
