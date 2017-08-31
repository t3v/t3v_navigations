<?php
namespace T3v\T3vNavigations\Domain\Model;

use TYPO3\CMS\Core\Localization\LocalizationFactory;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

use T3v\T3vCore\Domain\Model\AbstractEntity;

/**
 * Abstract Model Class
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
abstract class AbstractModel extends AbstractEntity {
  /**
   * The Localization Factory.
   *
   * @var \TYPO3\CMS\Core\Localization\LocalizationFactory
   * @inject
   */
  protected $localizationFactory;

  /**
   * Helper function to get the localizations.
   *
   * @param string $languageKey The optional language key, defaults to `default`
   * @return array The localizations
   */
  protected function getLocalizations($languageKey = 'default') {
    $loc‌​allang     = ExtensionManagementUtility::extPath($this->getExtensionKey(), 'Resources/Private/Language/locallang.xlf');
    $localizations = $this->localizationFactory->getParsedData($loc‌​allang, $languageKey);
    $localizations = $this->getLabelsByLanguageKey($localizations, $languageKey);
    $localizations = $this->getLabelsFromTarget($localizations);

    return $localizations;
  }

  /**
   * Gets the translated labels by a specific language key or fallback to `default`.
   *
   * @param array $localizations The localizations
   * @param string $languageKey The language key
   * @return array The labels
   */
  protected function getLabelsByLanguageKey($localizations, $languageKey) {
    $labels = [];

    if (empty($localizations[$languageKey]) === false) {
      $labels = $localizations[$languageKey];
    } elseif (empty($localizations['default']) === false) {
      $labels = $localizations['default'];
    }

    return $labels;
  }

  /**
   * Simplify labels by just taking the value from the target.
   *
   * @param array $labels The labels
   * @return array The labels
   */
  protected function getLabelsFromTarget($labels) {
    if (is_array($labels) === true) {
      foreach ($labels as $labelKey => $label) {
        $labels[$labelKey] = $label[0]['target'];
      }
    }

    return $labels;
  }

  /**
   * Helper function to get the key of the extension.
   *
   * @return string The extension key
   */
  protected static function getExtensionKey() {
    $extensionKey = 't3v_navigations';

    return $extensionKey;
  }
}