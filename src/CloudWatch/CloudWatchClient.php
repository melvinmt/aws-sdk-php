<?php
namespace AwsSDK\CloudWatch;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch** service.
 *
 * @method \AwsSDK\Result deleteAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlarmsAsync(array $args = [])
 * @method \AwsSDK\Result describeAlarmHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \AwsSDK\Result describeAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \AwsSDK\Result describeAlarmsForMetric(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsForMetricAsync(array $args = [])
 * @method \AwsSDK\Result disableAlarmActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAlarmActionsAsync(array $args = [])
 * @method \AwsSDK\Result enableAlarmActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAlarmActionsAsync(array $args = [])
 * @method \AwsSDK\Result getMetricStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricStatisticsAsync(array $args = [])
 * @method \AwsSDK\Result listMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricsAsync(array $args = [])
 * @method \AwsSDK\Result putMetricAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricAlarmAsync(array $args = [])
 * @method \AwsSDK\Result putMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricDataAsync(array $args = [])
 * @method \AwsSDK\Result setAlarmState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAlarmStateAsync(array $args = [])
 */
class CloudWatchClient extends AwsClient {}
