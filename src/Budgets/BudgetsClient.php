<?php
namespace AwsSDK\Budgets;

use AwsSDK\AwsClient;

/**
 * This client is used to interact with the **AWS Budgets** service.
 * @method \AwsSDK\Result createBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBudgetAsync(array $args = [])
 * @method \AwsSDK\Result createNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotificationAsync(array $args = [])
 * @method \AwsSDK\Result createSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriberAsync(array $args = [])
 * @method \AwsSDK\Result deleteBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBudgetAsync(array $args = [])
 * @method \AwsSDK\Result deleteNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationAsync(array $args = [])
 * @method \AwsSDK\Result deleteSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriberAsync(array $args = [])
 * @method \AwsSDK\Result describeBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBudgetAsync(array $args = [])
 * @method \AwsSDK\Result describeBudgets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBudgetsAsync(array $args = [])
 * @method \AwsSDK\Result describeNotificationsForBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationsForBudgetAsync(array $args = [])
 * @method \AwsSDK\Result describeSubscribersForNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscribersForNotificationAsync(array $args = [])
 * @method \AwsSDK\Result updateBudget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBudgetAsync(array $args = [])
 * @method \AwsSDK\Result updateNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotificationAsync(array $args = [])
 * @method \AwsSDK\Result updateSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriberAsync(array $args = [])
 */
class BudgetsClient extends AwsClient {}
