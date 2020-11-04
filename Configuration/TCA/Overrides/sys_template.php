<?php
/**
 * The `sys_template` TCA override.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_navigations';
$extensionTitle = 'T3v Navigations';

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $extensionKey,
    'Configuration/TypoScript',
    $extensionTitle
);

/** _XXX_T3V_GENERATOR_XXX_ */
