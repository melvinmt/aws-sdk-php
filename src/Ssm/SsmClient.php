<?php
namespace AwsSDK\Ssm;

use AwsSDK\AwsClient;
use AwsSDK\IdempotencyTokenMiddleware;

/**
 * Amazon EC2 Simple Systems Manager client.
 *
 * @method \AwsSDK\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \AwsSDK\Result cancelCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelCommandAsync(array $args = [])
 * @method \AwsSDK\Result createActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivationAsync(array $args = [])
 * @method \AwsSDK\Result createAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationAsync(array $args = [])
 * @method \AwsSDK\Result createAssociationBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationBatchAsync(array $args = [])
 * @method \AwsSDK\Result createDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentAsync(array $args = [])
 * @method \AwsSDK\Result createMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMaintenanceWindowAsync(array $args = [])
 * @method \AwsSDK\Result createPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPatchBaselineAsync(array $args = [])
 * @method \AwsSDK\Result deleteActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivationAsync(array $args = [])
 * @method \AwsSDK\Result deleteAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssociationAsync(array $args = [])
 * @method \AwsSDK\Result deleteDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentAsync(array $args = [])
 * @method \AwsSDK\Result deleteMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMaintenanceWindowAsync(array $args = [])
 * @method \AwsSDK\Result deleteParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParameterAsync(array $args = [])
 * @method \AwsSDK\Result deletePatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePatchBaselineAsync(array $args = [])
 * @method \AwsSDK\Result deregisterManagedInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterManagedInstanceAsync(array $args = [])
 * @method \AwsSDK\Result deregisterPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \AwsSDK\Result deregisterTargetFromMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTargetFromMaintenanceWindowAsync(array $args = [])
 * @method \AwsSDK\Result deregisterTaskFromMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTaskFromMaintenanceWindowAsync(array $args = [])
 * @method \AwsSDK\Result describeActivations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivationsAsync(array $args = [])
 * @method \AwsSDK\Result describeAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssociationAsync(array $args = [])
 * @method \AwsSDK\Result describeAutomationExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutomationExecutionsAsync(array $args = [])
 * @method \AwsSDK\Result describeAvailablePatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailablePatchesAsync(array $args = [])
 * @method \AwsSDK\Result describeDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentAsync(array $args = [])
 * @method \AwsSDK\Result describeDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentPermissionAsync(array $args = [])
 * @method \AwsSDK\Result describeEffectiveInstanceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEffectiveInstanceAssociationsAsync(array $args = [])
 * @method \AwsSDK\Result describeEffectivePatchesForPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEffectivePatchesForPatchBaselineAsync(array $args = [])
 * @method \AwsSDK\Result describeInstanceAssociationsStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAssociationsStatusAsync(array $args = [])
 * @method \AwsSDK\Result describeInstanceInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceInformationAsync(array $args = [])
 * @method \AwsSDK\Result describeInstancePatchStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchStatesAsync(array $args = [])
 * @method \AwsSDK\Result describeInstancePatchStatesForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchStatesForPatchGroupAsync(array $args = [])
 * @method \AwsSDK\Result describeInstancePatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchesAsync(array $args = [])
 * @method \AwsSDK\Result describeMaintenanceWindowExecutionTaskInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionTaskInvocationsAsync(array $args = [])
 * @method \AwsSDK\Result describeMaintenanceWindowExecutionTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionTasksAsync(array $args = [])
 * @method \AwsSDK\Result describeMaintenanceWindowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionsAsync(array $args = [])
 * @method \AwsSDK\Result describeMaintenanceWindowTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowTargetsAsync(array $args = [])
 * @method \AwsSDK\Result describeMaintenanceWindowTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowTasksAsync(array $args = [])
 * @method \AwsSDK\Result describeMaintenanceWindows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowsAsync(array $args = [])
 * @method \AwsSDK\Result describeParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \AwsSDK\Result describePatchBaselines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchBaselinesAsync(array $args = [])
 * @method \AwsSDK\Result describePatchGroupState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchGroupStateAsync(array $args = [])
 * @method \AwsSDK\Result describePatchGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchGroupsAsync(array $args = [])
 * @method \AwsSDK\Result getAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutomationExecutionAsync(array $args = [])
 * @method \AwsSDK\Result getCommandInvocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommandInvocationAsync(array $args = [])
 * @method \AwsSDK\Result getDefaultPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDefaultPatchBaselineAsync(array $args = [])
 * @method \AwsSDK\Result getDeployablePatchSnapshotForInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeployablePatchSnapshotForInstanceAsync(array $args = [])
 * @method \AwsSDK\Result getDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentAsync(array $args = [])
 * @method \AwsSDK\Result getInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInventoryAsync(array $args = [])
 * @method \AwsSDK\Result getInventorySchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInventorySchemaAsync(array $args = [])
 * @method \AwsSDK\Result getMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowAsync(array $args = [])
 * @method \AwsSDK\Result getMaintenanceWindowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionAsync(array $args = [])
 * @method \AwsSDK\Result getMaintenanceWindowExecutionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionTaskAsync(array $args = [])
 * @method \AwsSDK\Result getParameterHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParameterHistoryAsync(array $args = [])
 * @method \AwsSDK\Result getParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersAsync(array $args = [])
 * @method \AwsSDK\Result getPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPatchBaselineAsync(array $args = [])
 * @method \AwsSDK\Result getPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \AwsSDK\Result listAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsAsync(array $args = [])
 * @method \AwsSDK\Result listCommandInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandInvocationsAsync(array $args = [])
 * @method \AwsSDK\Result listCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandsAsync(array $args = [])
 * @method \AwsSDK\Result listDocumentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentVersionsAsync(array $args = [])
 * @method \AwsSDK\Result listDocuments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentsAsync(array $args = [])
 * @method \AwsSDK\Result listInventoryEntries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInventoryEntriesAsync(array $args = [])
 * @method \AwsSDK\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \AwsSDK\Result modifyDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDocumentPermissionAsync(array $args = [])
 * @method \AwsSDK\Result putInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInventoryAsync(array $args = [])
 * @method \AwsSDK\Result putParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putParameterAsync(array $args = [])
 * @method \AwsSDK\Result registerDefaultPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDefaultPatchBaselineAsync(array $args = [])
 * @method \AwsSDK\Result registerPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \AwsSDK\Result registerTargetWithMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTargetWithMaintenanceWindowAsync(array $args = [])
 * @method \AwsSDK\Result registerTaskWithMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTaskWithMaintenanceWindowAsync(array $args = [])
 * @method \AwsSDK\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \AwsSDK\Result sendCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendCommandAsync(array $args = [])
 * @method \AwsSDK\Result startAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAutomationExecutionAsync(array $args = [])
 * @method \AwsSDK\Result stopAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAutomationExecutionAsync(array $args = [])
 * @method \AwsSDK\Result updateAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationAsync(array $args = [])
 * @method \AwsSDK\Result updateAssociationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationStatusAsync(array $args = [])
 * @method \AwsSDK\Result updateDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentAsync(array $args = [])
 * @method \AwsSDK\Result updateDocumentDefaultVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentDefaultVersionAsync(array $args = [])
 * @method \AwsSDK\Result updateMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowAsync(array $args = [])
 * @method \AwsSDK\Result updateManagedInstanceRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateManagedInstanceRoleAsync(array $args = [])
 * @method \AwsSDK\Result updatePatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePatchBaselineAsync(array $args = [])
 */
class SsmClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        return $args + [
            'idempotency_auto_fill' => [
                'type'    => 'config',
                'valid'   => ['bool'],
                'doc'     => 'Set to false to disable SDK to populate parameters that'
                    . ' enabled \'idempotencyToken\' trait with a random UUID v4'
                    . ' value on your behalf. Using default value \'true\' still allows'
                    . ' parameter value to be overwritten when provided. Note:'
                    . ' auto-fill only works when cryptographically secure random'
                    . ' bytes generator functions(random_bytes, openssl_random_pseudo_bytes'
                    . ' or mcrypt_create_iv) can be found.',
                'default' => true,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * In addition to the options available to
     * {@see AwsSDK\AwsClient::__construct}, SsmClient accepts the following
     * options:
     *
     * - idempotency_auto_fill: (bool) Set to false to disable SDK to populate
     *   parameters that enabled 'idempotencyToken' trait with a default UUID v4
     *   value on your behalf. Using default value 'true' still allows parameter
     *   value to be overwritten when provided.
     *
     * @param array $args
     */
    public function __construct(array $args)
    {
        parent::__construct($args);
        if ($this->getConfig('idempotency_auto_fill')) {
            $stack = $this->getHandlerList();
            $stack->prependInit(
                IdempotencyTokenMiddleware::wrap($this->getApi()),
                'ssm.idempotency_auto_fill'
            );
        }
    }
}
