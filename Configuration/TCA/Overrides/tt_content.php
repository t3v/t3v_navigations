<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace = 'T3v';
$extensionKey = 't3v_navigations';
$extensionIdentifier = \T3v\T3vCore\Utility\ExtensionUtility::identifier($extensionKey);
$extensionSignature = \T3v\T3vCore\Utility\ExtensionUtility::signature($namespace, $extensionKey);
$flexFormsFolder = \T3v\T3vCore\Utility\ExtensionUtility::flexFormsFolder($extensionKey);
$lll = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_ttc.xlf');

// === Content Elements ===

// --- Flyout Navigation Content Element ---

$contentElementKey = 'Flyout Navigation';
$contentElementLabel = $lll . 'contentElements.flyoutNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/FlyoutNavigationContentElement.xml"
);

// --- Footer Navigation Content Element ---

$contentElementKey = 'Footer Navigation';
$contentElementLabel = $lll . 'contentElements.footerNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/FooterNavigationContentElement.xml"
);

// --- Header Navigation Content Element ---

$contentElementKey = 'Header Navigation';
$contentElementLabel = $lll . 'contentElements.headerNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/HeaderNavigationContentElement.xml"
);

// --- L10n Navigation Content Element ---

$contentElementKey = 'L10n Navigation';
$contentElementLabel = $lll . 'contentElements.l10nNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/L10nNavigationContentElement.xml"
);

// --- Main Navigation Content Element ---

$contentElementKey = 'Main Navigation';
$contentElementLabel = $lll . 'contentElements.mainNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/MainNavigationContentElement.xml"
);

// --- Mobile Navigation Content Element ---

$contentElementKey = 'Mobile Navigation';
$contentElementLabel = $lll . 'contentElements.mobileNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/MobileNavigationContentElement.xml"
);

// --- Overview Navigation Content Element ---

$contentElementKey = 'Overview Navigation';
$contentElementLabel = $lll . 'contentElements.overviewNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature(
    $extensionIdentifier,
    $contentElementIdentifier
);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extensionSignature,
    $contentElementIdentifier,
    $contentElementLabel
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/OverviewNavigationContentElement.xml"
);

// --- Quick Navigation Content Element ---

$contentElementKey = 'Quick Navigation';
$contentElementLabel = $lll . 'contentElements.quickNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature(
    $extensionIdentifier,
    $contentElementIdentifier
);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extensionSignature,
    $contentElementIdentifier,
    $contentElementLabel
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/QuickNavigationContentElement.xml"
);

// --- Subpages Navigation Content Element ---

$contentElementKey = 'Subpages Navigation';
$contentElementLabel = $lll . 'contentElements.subpagesNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature(
    $extensionIdentifier,
    $contentElementIdentifier
);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extensionSignature,
    $contentElementIdentifier,
    $contentElementLabel
);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/SubpagesNavigationContentElement.xml"
);

// --- Vendor Navigation Content Element ---

$contentElementKey = 'Vendor Navigation';
$contentElementLabel = $lll . 'contentElements.vendorNavigationContentElement.label';
$contentElementIdentifier = \T3v\T3vCore\Utility\ContentElementUtility::identifier($contentElementKey);
$contentElementSignature = \T3v\T3vCore\Utility\ContentElementUtility::signature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $contentElementSignature,
    "{$flexFormsFolder}/ContentElements/VendorNavigationContentElement.xml"
);

/** _XXX_T3V_CREATOR_XXX_ **/
