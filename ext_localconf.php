<?php
defined('TYPO3_MODE') or die();

// === Variables ===

/** @var string $_EXTKEY */

$namespace = 'T3v';
$extensionKey = $_EXTKEY;
$extensionSignature = \T3v\T3vCore\Utility\ExtensionUtility::signature($namespace, $extensionKey);
$tsConfigFolder = \T3v\T3vCore\Utility\ExtensionUtility::tsConfigFolder($extensionKey);
$iconsFolder = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

// === TSconfig ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "<INCLUDE_TYPOSCRIPT: source=\"{$tsConfigFolder}/Page.tsconfig\">"
);

/* _XXX_CE_CREATOR_XXX_ */

// === Content Elements ===

// --- Flyout Navigation Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the Content Element in upper camel case
    'FlyoutNavigation',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentElements\FlyoutNavigationContentElement' => 'index'
    ],

    // The array of non-cachable controller-action-combinations (they must already be enabled)
    [
        // 'ContentElements\FlyoutNavigationContentElement' => 'index'
    ]
);

// --- Footer Navigation Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the Content Element in upper camel case
    'FooterNavigation',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentElements\FooterNavigationContentElement' => 'index'
    ],

    // The array of non-cachable controller-action-combinations (they must already be enabled)
    [
        // 'ContentElements\FooterNavigationContentElement' => 'index'
    ]
);

// --- Header Navigation Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the Content Element in upper camel case
    'HeaderNavigation',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentElements\HeaderNavigationContentElement' => 'index'
    ],

    // The array of non-cachable controller-action-combinations (they must already be enabled)
    [
        // 'ContentElements\HeaderNavigationContentElement' => 'index'
    ]
);

// --- Main Navigation Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the Content Element in upper camel case
    'MainNavigation',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentElements\MainNavigationContentElement' => 'index'
    ],

    // The array of non-cachable controller-action-combinations (they must already be enabled)
    [
        // 'ContentElements\MainNavigationContentElement' => 'index'
    ]
);

// --- Overview Navigation Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content element in upper camel case
    'OverviewNavigation',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentElements\OverviewNavigationContentElement' => 'index'
    ],

    // The array of non-cachable controller-action-combinations (they must already be enabled)
    [
        // 'ContentElements\OverviewNavigationContentElement' => 'index'
    ]
);

// --- Quick Navigation Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content element in upper camel case
    'QuickNavigation',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentElements\QuickNavigationContentElement' => 'index'
    ],

    // The array of non-cachable controller-action-combinations (they must already be enabled)
    [
        // 'ContentElements\QuickNavigationContentElement' => 'index'
    ]
);

// --- Subpages Navigation Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the content element in upper camel case
    'SubpagesNavigation',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentElements\SubpagesNavigationContentElement' => 'index'
    ],

    // The array of non-cachable controller-action-combinations (they must already be enabled)
    [
        // 'ContentElements\SubpagesNavigationContentElement' => 'index'
    ]
);

// --- Vendor Navigation Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $extensionSignature,

    // The unique name of the Content Element in upper camel case
    'VendorNavigation',

    // The array holding the controller-action-combinations that are accessible
    [
        // The first controller and its first action will be the default
        'ContentElements\VendorNavigationContentElement' => 'index'
    ],

    // The array of non-cachable controller-action-combinations (they must already be enabled)
    [
        // 'ContentElements\VendorNavigationContentElement' => 'index'
    ]
);

// === Backend ===

if (TYPO3_MODE === 'BE') {
    // --- Icons ---

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    $icons = [
        'Flyout Navigation Content Element' => "{$iconsFolder}/ContentElements/FlyoutNavigationContentElement.svg",
        'Footer Navigation Content Element' => "{$iconsFolder}/ContentElements/FooterNavigationContentElement.svg",
        'Header Navigation Content Element' => "{$iconsFolder}/ContentElements/HeaderNavigationContentElement.svg",
        'Main Navigation Content Element' => "{$iconsFolder}/ContentElements/MainNavigationContentElement.svg",
        'Overview Navigation Content Element' => "{$iconsFolder}/ContentElements/OverviewNavigationContentElement.svg",
        'Quick Navigation Content Element' => "{$iconsFolder}/ContentElements/QuickNavigationContentElement.svg",
        'Subpages Navigation Content Element' => "{$iconsFolder}/ContentElements/SubpagesNavigationContentElement.svg",
        'Vendor Navigation Content Element' => "{$iconsFolder}/ContentElements/VendorNavigationContentElement.svg"
    ];

    foreach ($icons as $name => $source) {
        $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::identifier($name);
        $iconSignature = \T3v\T3vCore\Utility\IconUtility::signature($extensionKey, $iconIdentifier);

        $iconRegistry->registerIcon(
            $iconSignature,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => $source]
        );
    }
}
