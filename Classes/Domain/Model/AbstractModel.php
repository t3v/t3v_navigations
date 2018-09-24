<?php
namespace T3v\T3vNavigations\Domain\Model;

use TYPO3\CMS\Core\Localization\LocalizationFactory;

use T3v\T3vCore\Domain\Model\AbstractEntity;
use T3v\T3vCore\Domain\Model\Traits\LocalizationTrait;

/**
 * The abstract model class.
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
abstract class AbstractModel extends AbstractEntity {
  /**
   * The extension key.
   */
  const EXTENSION_KEY = 't3v_navigations';

  /**
   * The abstract model's title.
   *
   * @var string
   */
  protected $title;

  /**
   * The abstract model's label.
   *
   * @var string
   */
  protected $label;

  /**
   * The abstract model's type.
   *
   * @var string
   */
  protected $type;

  /**
   * The abstract model's page (UID).
   *
   * @var int
   */
  protected $page;

  /**
   * The abstract model's link (typolink).
   *
   * @var string
   */
  protected $link;

  /**
   * Returns the abstract model's title.
   *
   * @return string The abstract model's title
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Sets the abstract model's title.
   *
   * @param string $title The abstract model's title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Returns the abstract model's label.
   *
   * @return string The abstract model's label
   */
  public function getLabel() {
    $label = $this->label;
    $title = $this->title;

    if ($label) {
      return $label;
    } else {
      return $title;
    }
  }

  /**
   * Sets the abstract model's label.
   *
   * @param string $label The abstract model's label
   */
  public function setLabel($label) {
    $this->label = $label;
  }

  /**
   * Returns the abstract model's type.
   *
   * @return string The abstract model's type
   */
  public function getType() {
    return $this->type;
  }

  /**
   * Sets the abstract model's type.
   *
   * @param string $type The abstract model's type
   */
  public function setType($type) {
    $this->type = $type;
  }

  /**
   * Returns the abstract model's page (UID).
   *
   * @return int The abstract model's page (UID)
   */
  public function getPage() {
    return $this->page;
  }

  /**
   * Sets the abstract model's page (UID).
   *
   * @param int $link The abstract model's link page (UID)
   */
  public function setPage($page) {
    $this->page = $page;
  }

  /**
   * Returns the abstract model's link (typolink).
   *
   * @return string The abstract model's link (typolink)
   */
  public function getLink() {
    return $this->link;
  }

  /**
   * Sets the abstract model's link (typolink).
   *
   * @param string $link The abstract model's link (typolink)
   */
  public function setLink($link) {
    $this->link = $link;
  }

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
