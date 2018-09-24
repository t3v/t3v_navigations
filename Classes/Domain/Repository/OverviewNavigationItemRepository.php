<?php
namespace T3v\T3vNavigations\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

use T3v\T3vCore\Domain\Repository\AbstractRepository;

use T3v\T3vNavigations\Domain\Repository\Traits\LocalizationTrait;

/**
 * The overview navigation item repository class.
 *
 * @package T3v\T3vNavigations\Domain\Repository
 */
class OverviewNavigationItemRepository extends AbstractRepository {
  /**
   * The default orderings.
   *
   * @var array
   */
  protected $defaultOrderings = [
    'title'   => QueryInterface::ORDER_ASCENDING,
    'sorting' => QueryInterface::ORDER_ASCENDING
  ];

  /**
   * Use the localization trait.
   */
  use LocalizationTrait;
}
