<?php
namespace T3v\T3vNavigations\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

use T3v\T3vCore\Domain\Repository\AbstractRepository;

use T3v\T3vNavigations\Domain\Repository\Traits\LocalisationTrait;

/**
 * Quick Navigation Item Repository Class
 *
 * @package T3v\T3vNavigations\Domain\Repository
 */
class QuickNavigationItemRepository extends AbstractRepository {
  /**
   * Use the localisation trait.
   */
  use LocalisationTrait;

  /**
   * The default orderings.
   *
   * @var array
   */
  protected $defaultOrderings = [
    'title'   => QueryInterface::ORDER_ASCENDING,
    'sorting' => QueryInterface::ORDER_ASCENDING
  ];
}