<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace           = 'T3v';
$extensionKey        = $_EXTKEY;
$extensionSignature  = \T3v\T3vCore\Utility\ExtensionUtility::extensionSignature($namespace, $extensionKey);
$configurationFolder = \T3v\T3vCore\Utility\ExtensionUtility::configurationFolder($extensionKey);
$iconsFolder         = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

// === Page TSconfig ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("<INCLUDE_TYPOSCRIPT: source=\"{$configurationFolder}/TSconfig.tsconfig\">");

// === Content Elements ===

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

// === Backend ===

if (TYPO3_MODE === 'BE') {
  // --- Icons ---

  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

  $icons = [
    'Overview Navigation Content Element' => "{$iconsFolder}/ContentElements/OverviewNavigationContentElement.svg",
    'Quick Navigation Content Element'    => "{$iconsFolder}/ContentElements/QuickNavigationContentElement.svg",
    'Subpages Navigation Content Element' => "{$iconsFolder}/ContentElements/SubpagesNavigationContentElement.svg"
  ];

  foreach ($icons as $name => $source) {
    $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($name);
    $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

    $iconRegistry->registerIcon(
      $iconSignature,
      \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
      ['source' => $source]
    );
  }
}