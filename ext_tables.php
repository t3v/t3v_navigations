<?php
/**
 * The extension tables configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_navigations';
$languageFolder = \T3v\T3vCore\Utility\ExtensionUtility::getLanguageFolder($extensionKey);

// === Models ===

// --- Flyout Navigation Item Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vnavigations_domain_model_flyout_navigation_item');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vnavigations_domain_model_flyout_navigation_item',
    "${languageFolder}/locallang_csh_tx_t3vnavigations_domain_model_flyout_navigation_item.xlf"
);

// --- Footer Navigation Item Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vnavigations_domain_model_footer_navigation_item');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vnavigations_domain_model_footer_navigation_item',
    "${languageFolder}/locallang_csh_tx_t3vnavigations_domain_model_footer_navigation_item.xlf"
);

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

// --- Vendor Navigation Item Model ---

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vnavigations_domain_model_vendor_navigation_item');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_t3vnavigations_domain_model_vendor_navigation_item',
    "${languageFolder}/locallang_csh_tx_t3vnavigations_domain_model_vendor_navigation_item.xlf"
);

/** _XXX_T3V_CREATOR_XXX_ */
