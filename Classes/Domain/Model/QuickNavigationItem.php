<?php
namespace T3v\T3vNavigations\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The quick navigation item class.
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
class QuickNavigationItem extends AbstractModel {
  /**
   * The quick navigation item's title.
   *
   * @var string
   */
  protected $title;

  /**
   * The quick navigation item's label.
   *
   * @var string
   */
  protected $label;

  /**
   * The quick navigation item's page (UID).
   *
   * @var int
   */
  protected $page;

  /**
   * The quick navigation item's link (typolink).
   *
   * @var string
   */
  protected $link;

  /**
   * Returns the quick navigation item's title.
   *
   * @return string The quick navigation item's title
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Sets the quick navigation item's title.
   *
   * @param string $title The quick navigation item's title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Returns the quick navigation item's label.
   *
   * @return string The quick navigation item's label
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
   * Sets the quick navigation item's label.
   *
   * @param string $label The quick navigation item's label
   */
  public function setLabel($label) {
    $this->label = $label;
  }

  /**
   * Returns the quick navigation item's page (UID).
   *
   * @return int The quick navigation item's page (UID)
   */
  public function getPage() {
    return $this->page;
  }

  /**
   * Sets the quick navigation item's page (UID).
   *
   * @param int $link The quick navigation item's link page (UID)
   */
  public function setPage($page) {
    $this->page = $page;
  }

  /**
   * Returns the quick navigation item's link (typolink).
   *
   * @return string The quick navigation item's link (typolink)
   */
  public function getLink() {
    return $this->link;
  }

  /**
   * Sets the quick navigation item's link (typolink).
   *
   * @param string $link The quick navigation item's link (typolink)
   */
  public function setLink($link) {
    $this->link = $link;
  }
}