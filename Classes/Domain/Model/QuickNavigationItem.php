<?php
namespace T3v\T3vNavigations\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Quick Navigation Item Class
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
   * The quick navigation item's link.
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
   * @return void
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Returns the quick navigation item's link.
   *
   * @return string The quick navigation item's link
   */
  public function getLink() {
    return $this->link;
  }

  /**
   * Sets the quick navigation item's link.
   *
   * @param string $link The quick navigation item's link
   * @return void
   */
  public function setLink($link) {
    $this->link = $link;
  }
}