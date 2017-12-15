<?php
namespace T3v\T3vNavigations\Domain\Model;

use TYPO3\CMS\Core\Localization\LocalizationFactory;

use T3v\T3vCore\Domain\Model\AbstractEntity;
use T3v\T3vCore\Domain\Model\Traits\LocalizationTrait;

/**
 * Abstract Model Class
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
abstract class AbstractModel extends AbstractEntity {
  /**
   * The extension key.
   */
  const EXTENSION_KEY = 't3v_navigations';

  /**
   * The localization factory.
   *
   * @var \TYPO3\CMS\Core\Localization\LocalizationFactory
   * @inject
   */
  protected $localizationFactory;

  /**
   * Use the localization trait, requires an extension key and a localisation factory.
   */
  use LocalizationTrait;
}