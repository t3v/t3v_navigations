<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Domain\Model;

/**
 * The flyout navigation item class.
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
class FlyoutNavigationItem extends AbstractEntity
{
    /**
     * The flyout navigation item's content.
     *
     * @var string
     */
    protected $content;

    /**
     * Returns the flyout navigation item's content.
     *
     * @return string The flyout navigation item's content
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Sets the flyout navigation item's content.
     *
     * @param string $content The flyout navigation item's content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
