<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($namespace, $extkey) {
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === TCA ===

  // --- Overview Navigation Item Model ---

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3vnavigations_domain_model_overview_navigation_item', 'EXT:' . $extkey . '/Resources/Private/Language/locallang_csh_tx_t3vnavigations_domain_model_overview_navigation_item.xlf');
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vnavigations_domain_model_overview_navigation_item');

  // --- Quick Navigation Item Model ---

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3vnavigations_domain_model_quick_navigation_item', 'EXT:' . $extkey . '/Resources/Private/Language/locallang_csh_tx_t3vnavigations_domain_model_quick_navigation_item.xlf');
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vnavigations_domain_model_quick_navigation_item');

  // === Icons ===

  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
  );

  // --- Quick Navigation Content Element ---

  $iconIdentifier = 'quick_navigation_content_element';

  $iconRegistry->registerIcon(
    "{$extkey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "EXT:{$extkey}/Resources/Public/Icons/ContentElements/QuickNavigationContentElement.svg"]
  );

  // === TypoScript ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extkey, 'Configuration/TypoScript', 'T3v Navigations');
}, 't3v', $_EXTKEY);