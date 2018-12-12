<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace           = 'T3v';
$extensionKey        = 't3v_navigations';
$extensionIdentifier = \T3v\T3vCore\Utility\ExtensionUtility::extensionIdentifier($extensionKey);
$extensionSignature  = \T3v\T3vCore\Utility\ExtensionUtility::extensionSignature($namespace, $extensionKey);
$flexFormsFolder     = \T3v\T3vCore\Utility\ExtensionUtility::flexFormsFolder($extensionKey);
$lll                 = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_ttc.xlf');

// === Content Elements ===

// --- Overview Navigation Content Element ---

$contentElementKey         = 'Overview Navigation';
$contentElementDescription = $lll . 'contentElements.overviewNavigationContentElement.description';
$contentElementIdentifier  = \T3v\T3vContent\Utility\ContentElementUtility::contentElementIdentifier($contentElementKey);
$contentElementSignature   = \T3v\T3vContent\Utility\ContentElementUtility::contentElementSignature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementDescription);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexFormsFolder}/ContentElements/OverviewNavigationContentElement.xml");

// --- Quick Navigation Content Element ---

$contentElementKey         = 'Quick Navigation';
$contentElementDescription = $lll . 'contentElements.quickNavigationContentElement.description';
$contentElementIdentifier  = \T3v\T3vContent\Utility\ContentElementUtility::contentElementIdentifier($contentElementKey);
$contentElementSignature   = \T3v\T3vContent\Utility\ContentElementUtility::contentElementSignature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementDescription);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexFormsFolder}/ContentElements/QuickNavigationContentElement.xml");

// --- Subpages Navigation Content Element ---

$contentElementKey         = 'Subpages Navigation';
$contentElementDescription = $lll . 'contentElements.subpagesNavigationContentElement.description';
$contentElementIdentifier  = \T3v\T3vContent\Utility\ContentElementUtility::contentElementIdentifier($contentElementKey);
$contentElementSignature   = \T3v\T3vContent\Utility\ContentElementUtility::contentElementSignature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementDescription);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexFormsFolder}/ContentElements/SubpagesNavigationContentElement.xml");