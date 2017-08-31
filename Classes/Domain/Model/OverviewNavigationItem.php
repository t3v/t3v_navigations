<?php
namespace T3v\T3vNavigations\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Overview Navigation Item Class
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
class OverviewNavigationItem extends AbstractModel {
  /**
   * The overview navigation item's title.
   *
   * @var string
   */
  protected $title;

  /**
   * The overview navigation item's thumbnail.
   *
   * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
   */
  protected $thumbnail;

  /**
   * The overview navigation item's link.
   *
   * @var string
   */
  protected $link;

  /**
   * Returns the overview navigation item's title.
   *
   * @return string The overview navigation item's title
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Sets the overview navigation item's title.
   *
   * @param string $title The overview navigation item's title
   * @return void
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Returns the overview navigation item's thumbnail.
   *
   * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference The overview navigation item's thumbnail
   */
  public function getThumbnail() {
    return $this->thumbnail;
  }

  /**
   * Sets the overview navigation item's thumbnail.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The overview navigation item's thumbnail
   * @return void
   */
  public function setThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnail = $thumbnail;
  }

  /**
   * Returns the overview navigation item's link.
   *
   * @return string The overview navigation item's link
   */
  public function getLink() {
    return $this->link;
  }

  /**
   * Sets the overview navigation item's link.
   *
   * @param string $link The overview navigation item's link
   * @return void
   */
  public function setLink($link) {
    $this->link = $link;
  }
}