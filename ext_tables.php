<?php
/**
 * The extension tables configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

(static function () {
    // === Variables ===

    $extensionKey = 't3v_navigations';
    $languageFolder = \T3v\T3vCore\Utility\ExtensionUtility::getLanguageFolder($extensionKey);

    // === TCA ===

    $tables = [
        'tx_t3vnavigations_domain_model_flyout_navigation_item',
        'tx_t3vnavigations_domain_model_footer_navigation_item',
        'tx_t3vnavigations_domain_model_overview_navigation_item',
        'tx_t3vnavigations_domain_model_quick_navigation_item',
        'tx_t3vnavigations_domain_model_vendor_navigation_item'
    ];

    foreach ($tables as $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            $table,
            "{$languageFolder}/locallang_csh_{$table}.xlf"
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($table);
    }

    // === T3v Generator ===
})();
