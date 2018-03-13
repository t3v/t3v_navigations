<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace           = 'T3v';
$extensionKey        = 't3v_navigations';
$extensionIdentifier = \T3v\T3vCore\Utility\ExtensionUtility::extensionIdentifier($extensionKey);
$extensionSignature  = \T3v\T3vCore\Utility\ExtensionUtility::extensionSignature($namespace, $extensionKey);
$flexFormsFolder     = \T3v\T3vCore\Utility\ExtensionUtility::flexFormsFolder($extensionKey);

// === Content Elements ===

// --- Overview Navigation Content Element ---

$contentElementKey         = 'Overview Navigation';
$contentElementDescription = 'Overview Navigation Content Element';
$contentElementIdentifier  = \T3v\T3vContent\Utility\ContentElementUtility::contentElementIdentifier($contentElementKey);
$contentElementSignature   = \T3v\T3vContent\Utility\ContentElementUtility::contentElementSignature($extensionIdentifier, $contentElementIdentifier);

// Register the content element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementDescription);

// Disable the display of `layout`, `pages` and `select_key` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexFormsFolder}/ContentElements/OverviewNavigationContentElement.xml");

// --- Quick Navigation Content Element ---

$contentElementKey         = 'Quick Navigation';
$contentElementDescription = 'Quick Navigation Content Element';
$contentElementIdentifier  = \T3v\T3vContent\Utility\ContentElementUtility::contentElementIdentifier($contentElementKey);
$contentElementSignature   = \T3v\T3vContent\Utility\ContentElementUtility::contentElementSignature($extensionIdentifier, $contentElementIdentifier);

// Register the content element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementDescription);

// Disable the display of `layout`, `pages` and `select_key` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexFormsFolder}/ContentElements/QuickNavigationContentElement.xml");

// --- Quick Navigation Content Element ---

$contentElementKey         = 'Subpages Navigation';
$contentElementDescription = 'Subpages Navigation Content Element';
$contentElementIdentifier  = \T3v\T3vContent\Utility\ContentElementUtility::contentElementIdentifier($contentElementKey);
$contentElementSignature   = \T3v\T3vContent\Utility\ContentElementUtility::contentElementSignature($extensionIdentifier, $contentElementIdentifier);

// Register the content element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementDescription);

// Disable the display of `layout`, `pages` and `select_key` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexFormsFolder}/ContentElements/SubpagesNavigationContentElement.xml");