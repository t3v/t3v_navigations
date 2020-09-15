<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The overview navigation item class.
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
class OverviewNavigationItem extends AbstractEntity
{
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
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @noinspection PhpFullyQualifiedNameUsageInspection
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
    public function __construct()
    {
        $this->thumbnails = new ObjectStorage();
    }

    /**
     * Returns the overview navigation item's abstract.
     *
     * @return string The overview navigation item's abstract
     */
    public function getAbstract(): string
    {
        return $this->abstract;
    }

    /**
     * Sets the overview navigation item's abstract.
     *
     * @param string $abstract The overview navigation item's abstract
     */
    public function setAbstract(string $abstract): void
    {
        $this->abstract = $abstract;
    }

    /**
     * Returns all thumbnails belonging to the overview navigation item.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> The overview navigation item's thumbnails
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * Gets the first thumbnail from the overview navigation item.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference|object|null The first thumbnail or null if no thumbnail was found
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function getFirstThumbnail(): ?FileReference
    {
        return $this->getThumbnails()->current();
    }

    /**
     * Sets the overview navigation item's thumbnails.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $thumbnails The overview navigation item's thumbnails
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function setThumbnails($thumbnails): void
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * Adds a thumbnail to the overview navigation item.
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be added
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function addThumbnail(FileReference $thumbnail): void
    {
        $this->thumbnails->attach($thumbnail);
    }

    /**
     * Removes a thumbnail from the overview navigation item.
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be removed
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function removeThumbnail(FileReference $thumbnail): void
    {
        $this->thumbnails->detach($thumbnail);
    }

    /**
     * Removes all thumbnails from the overview navigation item.
     */
    public function removeAllThumbnails(): void
    {
        $this->thumbnails = new ObjectStorage();
    }

    /**
     * Returns the overview navigation item's page (UID).
     *
     * @return int The overview navigation item's page (UID)
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * Sets the overview navigation item's page (UID).
     *
     * @param int $page The overview navigation item's link page (UID)
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * Returns the overview navigation item's link (typolink).
     *
     * @return string The overview navigation item's link (typolink)
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Sets the overview navigation item's link (typolink).
     *
     * @param string $link The overview navigation item's link (typolink)
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }
}
