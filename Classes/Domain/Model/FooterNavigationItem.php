<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Domain\Model;

/**
 * The footer navigation item class.
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
class FooterNavigationItem extends AbstractEntity
{
    /**
     * The footer navigation item's page (UID).
     *
     * @var int
     */
    protected $page;

    /**
     * The footer navigation item's link (typolink).
     *
     * @var string
     */
    protected $link;

    /**
     * Returns the footer navigation item's page (UID).
     *
     * @return int|null The footer navigation item's page (UID)
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * Sets the footer navigation item's page (UID).
     *
     * @param int $page The footer navigation item's link page (UID)
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * Returns the footer navigation item's link (typolink).
     *
     * @return string|null The footer navigation item's link (typolink)
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * Sets the footer navigation item's link (typolink).
     *
     * @param string $link The footer navigation item's link (typolink)
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }
}
