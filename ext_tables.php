<?php
defined('TYPO3_MODE') or die();

$extensionKey   = $_EXTKEY;
$languageFolder = \T3v\T3vCore\Utility\ExtensionUtility::languageFolder($extensionKey);

// === Models ===

// --- Overview Navigation Item Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vnavigations_domain_model_overview_navigation_item');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
  'tx_t3vnavigations_domain_model_overview_navigation_item',
  "${languageFolder}/locallang_csh_tx_t3vnavigations_domain_model_overview_navigation_item.xlf"
);

// --- Quick Navigation Item Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vnavigations_domain_model_quick_navigation_item');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
  'tx_t3vnavigations_domain_model_quick_navigation_item',
  "${languageFolder}/locallang_csh_tx_t3vnavigations_domain_model_quick_navigation_item.xlf"
);
