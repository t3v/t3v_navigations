<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Domain\Model;

/**
 * The quick navigation item class.
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
class QuickNavigationItem extends AbstractEntity
{
    /**
     * The quick navigation item's link (typolink).
     *
     * @var string
     */
    protected $link;

    /**
     * The quick navigation item's page (UID).
     *
     * @var int
     */
    protected $page;

    /**
     * Returns the quick navigation item's page (UID).
     *
     * @return int The quick navigation item's page (UID)
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * Sets the quick navigation item's page (UID).
     *
     * @param int $page The quick navigation item's link page (UID)
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * Returns the quick navigation item's link (typolink).
     *
     * @return string The quick navigation item's link (typolink)
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Sets the quick navigation item's link (typolink).
     *
     * @param string $link The quick navigation item's link (typolink)
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }
}
