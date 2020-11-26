<?php

require_once 'access_to_print_report.civix.php';
// phpcs:disable
use CRM_AccessToPrintReport_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function access_to_print_report_civicrm_config(&$config) {
  _access_to_print_report_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function access_to_print_report_civicrm_xmlMenu(&$files) {
  _access_to_print_report_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function access_to_print_report_civicrm_install() {
  _access_to_print_report_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function access_to_print_report_civicrm_postInstall() {
  _access_to_print_report_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function access_to_print_report_civicrm_uninstall() {
  _access_to_print_report_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function access_to_print_report_civicrm_enable() {
  _access_to_print_report_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function access_to_print_report_civicrm_disable() {
  _access_to_print_report_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function access_to_print_report_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _access_to_print_report_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function access_to_print_report_civicrm_managed(&$entities) {
  _access_to_print_report_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function access_to_print_report_civicrm_caseTypes(&$caseTypes) {
  _access_to_print_report_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function access_to_print_report_civicrm_angularModules(&$angularModules) {
  _access_to_print_report_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function access_to_print_report_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _access_to_print_report_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function access_to_print_report_civicrm_entityTypes(&$entityTypes) {
  _access_to_print_report_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function access_to_print_report_civicrm_themes(&$themes) {
  _access_to_print_report_civix_civicrm_themes($themes);
}



/**
 * Implementation of hook_civicrm_buildForm
 */
function access_to_print_report_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Case_Form_CaseView') {
    $form->assign('hasAccessToAllCases',
      CRM_Core_Permission::check('access my cases and activities'));
  }
}

