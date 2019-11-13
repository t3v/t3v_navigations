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
   * Use the localization trait, requires an extension key.
   */
  use LocalizationTrait;

  /**
   * The model's title.
   *
   * @var string
   */
  protected $title;

  /**
   * The model's label.
   *
   * @var string
   */
  protected $label;

  /**
   * The model's type.
   *
   * @var string
   */
  protected $type;

  /**
   * The model's page (UID).
   *
   * @var int
   */
  protected $page;

  /**
   * The model's link (typolink).
   *
   * @var string
   */
  protected $link;

  /**
   * Returns the model's title.
   *
   * @return string The model's title
   */
  public function getTitle(): string {
    return $this->title;
  }

  /**
   * Sets the model's title.
   *
   * @param string $title The model's title
   */
  public function setTitle(string $title): void {
    $this->title = $title;
  }

  /**
   * Returns the model's label.
   *
   * @return string The model's label
   */
  public function getLabel(): string {
    $label = $this->label;
    $title = $this->title;

    if ($label) {
      return $label;
    } else {
      return $title;
    }
  }

  /**
   * Sets the model's label.
   *
   * @param string $label The model's label
   */
  public function setLabel(string $label): void {
    $this->label = $label;
  }

  /**
   * Returns the model's type.
   *
   * @return string The model's type
   */
  public function getType(): string {
    return $this->type;
  }

  /**
   * Sets the model's type.
   *
   * @param string $type The model's type
   */
  public function setType(string $type): void {
    $this->type = $type;
  }

  /**
   * Returns the model's page (UID).
   *
   * @return int The model's page (UID)
   */
  public function getPage(): int {
    return $this->page;
  }

  /**
   * Sets the model's page (UID).
   *
   * @param int $link The model's link page (UID)
   */
  public function setPage(int $page): void {
    $this->page = $page;
  }

  /**
   * Returns the model's link (typolink).
   *
   * @return string The model's link (typolink)
   */
  public function getLink(): string {
    return $this->link;
  }

  /**
   * Sets the model's link (typolink).
   *
   * @param string $link The model's link (typolink)
   */
  public function setLink(string $link): void {
    $this->link = $link;
  }
}
