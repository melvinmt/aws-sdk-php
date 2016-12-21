<?php
namespace AwsSDK\XRay;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS X-Ray** service.
 * @method \AwsSDK\Result batchGetTraces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetTracesAsync(array $args = [])
 * @method \AwsSDK\Result getServiceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceGraphAsync(array $args = [])
 * @method \AwsSDK\Result getTraceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceGraphAsync(array $args = [])
 * @method \AwsSDK\Result getTraceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceSummariesAsync(array $args = [])
 * @method \AwsSDK\Result putTelemetryRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTelemetryRecordsAsync(array $args = [])
 * @method \AwsSDK\Result putTraceSegments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTraceSegmentsAsync(array $args = [])
 */
class XRayClient extends AwsClient {}
