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
   * The overview navigation item's thumbnails.
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   * @lazy
   * @cascade remove
   */
  protected $thumbnails;

  /**
   * The overview navigation item's link.
   *
   * @var string
   */
  protected $link;

  /**
   * Constructs a new overview navigation item.
   */
  public function __construct() {
    $this->thumbnails = new ObjectStorage();
  }

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
   * Returns all thumbnails belonging to the overview navigation item.
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   */
  public function getThumbnails() {
    return $this->thumbnails;
  }

  /**
   * Adds a thumbnail to the overview navigation item.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be added
   * @return void
   */
  public function addThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->attach($thumbnail);
  }

  /**
   * Removes a thumbnail from the overview navigation item.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be removed
   * @return void
   */
  public function removeThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->detach($thumbnail);
  }

  /**
   * Removes all thumbnails from the overview navigation item.
   *
   * @return void
   */
  public function removeAllThumbnails() {
    $this->thumbnails = new ObjectStorage();
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