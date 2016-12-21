<?php
namespace AwsSDK\Acm;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Certificate Manager** service.
 *
 * @method \AwsSDK\Result addTagsToCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToCertificateAsync(array $args = [])
 * @method \AwsSDK\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \AwsSDK\Result describeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \AwsSDK\Result getCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAsync(array $args = [])
 * @method \AwsSDK\Result importCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCertificateAsync(array $args = [])
 * @method \AwsSDK\Result listCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \AwsSDK\Result listTagsForCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForCertificateAsync(array $args = [])
 * @method \AwsSDK\Result removeTagsFromCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromCertificateAsync(array $args = [])
 * @method \AwsSDK\Result requestCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestCertificateAsync(array $args = [])
 * @method \AwsSDK\Result resendValidationEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resendValidationEmailAsync(array $args = [])
 */
class AcmClient extends AwsClient {}
