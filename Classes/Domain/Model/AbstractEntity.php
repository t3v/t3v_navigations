<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Domain\Model;

use T3v\T3vCore\Domain\Model\AbstractEntity as T3vCoreAbstractEntity;

/**
 * The abstract entity class.
 *
 * @package T3v\T3vNavigations\Domain\Model
 */
abstract class AbstractEntity extends T3vCoreAbstractEntity
{
    /**
     * The extension key.
     */
    public const EXTENSION_KEY = 't3v_navigations';

    /**
     * The entity's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The entity's label.
     *
     * @var string
     */
    protected $label;

    /**
     * The entity's layout.
     *
     * @var string
     */
    protected $layout;

    /**
     * Returns the entity's name.
     *
     * @return string|null The entity's name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets the entity's name.
     *
     * @param string $name The entity's name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the entity's label.
     *
     * @return string|null The entity's label
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Sets the entity's label.
     *
     * @param string $label The entity's label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns the entity's title.
     *
     * @return string|null The entity's title
     */
    public function getTitle(): ?string
    {
        return $this->label ?? $this->name;
    }

    /**
     * Returns the entity's layout.
     *
     * @return string|null The entity's layout
     */
    public function getLayout(): ?string
    {
        return $this->layout;
    }

    /**
     * Sets the entity's layout.
     *
     * @param string $layout The entity's layout
     */
    public function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }
}
