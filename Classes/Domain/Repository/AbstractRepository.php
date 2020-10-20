<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Domain\Repository;

use T3v\T3vCore\Domain\Repository\AbstractRepository as T3vCoreAbstractRepository;

/**
 * The abstract repository class.
 *
 * @package T3v\T3vNavigations\Domain\Repository
 */
abstract class AbstractRepository extends T3vCoreAbstractRepository
{
    /**
     * The default orderings.
     *
     * @var array
     */
    protected $defaultOrderings = [
        'name' => QueryInterface::ORDER_ASCENDING,
        'sorting' => QueryInterface::ORDER_ASCENDING
    ];
}
