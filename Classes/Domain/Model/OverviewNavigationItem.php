<?php
namespace T3v\T3vNavigations\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The overview navigation item class.
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
   * The overview navigation item's label.
   *
   * @var string
   */
  protected $label;

  /**
   * The overview navigation item's abstract.
   *
   * @var string
   */
  protected $abstract;

  /**
   * The overview navigation item's thumbnails.
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   * @lazy
   * @cascade remove
   */
  protected $thumbnails;

  /**
   * The overview navigation item's page (UID).
   *
   * @var int
   */
  protected $page;

  /**
   * The overview navigation item's link (typolink).
   *
   * @var string
   */
  protected $link;

  /**
   * Constructs a new overview navigation item.
   */
  public function __construct() {
    parent::__construct();

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
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Returns the overview navigation item's label.
   *
   * @return string The overview navigation item's label
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
   * Sets the overview navigation item's label.
   *
   * @param string $label The overview navigation item's label
   */
  public function setLabel($label) {
    $this->label = $label;
  }

  /**
   * Returns the overview navigation item's abstract.
   *
   * @return string The overview navigation item's abstract
   */
  public function getAbstract() {
    return $this->abstract;
  }

  /**
   * Sets the overview navigation item's abstract.
   *
   * @param string $abstract The overview navigation item's abstract
   */
  public function setAbstract($abstract) {
    $this->abstract = $abstract;
  }

  /**
   * Returns all thumbnails belonging to the overview navigation item.
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> The overview navigation item's thumbnails
   */
  public function getThumbnails() {
    return $this->thumbnails;
  }

  /**
   * Adds a thumbnail to the overview navigation item.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be added
   */
  public function addThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->attach($thumbnail);
  }

  /**
   * Removes a thumbnail from the overview navigation item.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be removed
   */
  public function removeThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->detach($thumbnail);
  }

  /**
   * Removes all thumbnails from the overview navigation item.
   */
  public function removeAllThumbnails() {
    $this->thumbnails = new ObjectStorage();
  }

  /**
   * Returns the overview navigation item's page (UID).
   *
   * @return int The overview navigation item's page (UID)
   */
  public function getPage() {
    return $this->page;
  }

  /**
   * Sets the overview navigation item's page (UID).
   *
   * @param int $link The overview navigation item's link page (UID)
   */
  public function setPage($page) {
    $this->page = $page;
  }

  /**
   * Returns the overview navigation item's link (typolink).
   *
   * @return string The overview navigation item's link (typolink)
   */
  public function getLink() {
    return $this->link;
  }

  /**
   * Sets the overview navigation item's link (typolink).
   *
   * @param string $link The overview navigation item's link (typolink)
   */
  public function setLink($link) {
    $this->link = $link;
  }
}