<?php
namespace AwsSDK\Kms;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Key Management Service**.
 *
 * @method \AwsSDK\Result cancelKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelKeyDeletionAsync(array $args = [])
 * @method \AwsSDK\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \AwsSDK\Result createGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGrantAsync(array $args = [])
 * @method \AwsSDK\Result createKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyAsync(array $args = [])
 * @method \AwsSDK\Result decrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decryptAsync(array $args = [])
 * @method \AwsSDK\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \AwsSDK\Result deleteImportedKeyMaterial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImportedKeyMaterialAsync(array $args = [])
 * @method \AwsSDK\Result describeKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyAsync(array $args = [])
 * @method \AwsSDK\Result disableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyAsync(array $args = [])
 * @method \AwsSDK\Result disableKeyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyRotationAsync(array $args = [])
 * @method \AwsSDK\Result enableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyAsync(array $args = [])
 * @method \AwsSDK\Result enableKeyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyRotationAsync(array $args = [])
 * @method \AwsSDK\Result encrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise encryptAsync(array $args = [])
 * @method \AwsSDK\Result generateDataKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyAsync(array $args = [])
 * @method \AwsSDK\Result generateDataKeyWithoutPlaintext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyWithoutPlaintextAsync(array $args = [])
 * @method \AwsSDK\Result generateRandom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateRandomAsync(array $args = [])
 * @method \AwsSDK\Result getKeyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPolicyAsync(array $args = [])
 * @method \AwsSDK\Result getKeyRotationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyRotationStatusAsync(array $args = [])
 * @method \AwsSDK\Result getParametersForImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersForImportAsync(array $args = [])
 * @method \AwsSDK\Result importKeyMaterial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyMaterialAsync(array $args = [])
 * @method \AwsSDK\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \AwsSDK\Result listGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGrantsAsync(array $args = [])
 * @method \AwsSDK\Result listKeyPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeyPoliciesAsync(array $args = [])
 * @method \AwsSDK\Result listKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeysAsync(array $args = [])
 * @method \AwsSDK\Result listRetirableGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRetirableGrantsAsync(array $args = [])
 * @method \AwsSDK\Result putKeyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putKeyPolicyAsync(array $args = [])
 * @method \AwsSDK\Result reEncrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reEncryptAsync(array $args = [])
 * @method \AwsSDK\Result retireGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retireGrantAsync(array $args = [])
 * @method \AwsSDK\Result revokeGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeGrantAsync(array $args = [])
 * @method \AwsSDK\Result scheduleKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleKeyDeletionAsync(array $args = [])
 * @method \AwsSDK\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \AwsSDK\Result updateKeyDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKeyDescriptionAsync(array $args = [])
 */
class KmsClient extends AwsClient {}
