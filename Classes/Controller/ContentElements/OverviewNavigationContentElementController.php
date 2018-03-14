<?php
namespace T3v\T3vNavigations\Controller\ContentElements;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use T3v\T3vNavigations\Domain\Repository\OverviewNavigationItemRepository;

/**
 * The overview navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class OverviewNavigationContentElementController extends ContentElementController {
  /**
   * The overview navigation item repository.
   *
   * @var \T3v\T3vNavigations\Domain\Repository\OverviewNavigationItemRepository
   * @inject
   */
  protected $overviewNavigationItemRepository;

  /**
   * The index action.
   */
  public function indexAction() {
    $settings = $this->settings;

    $items     = [];
    $itemsUids = GeneralUtility::intExplode(',', $settings['items'], true);

    foreach($itemsUids as $uid) {
      $items[] = $this->overviewNavigationItemRepository->findByUid($uid);
    }

    $this->view->assign('settings', $settings);
    $this->view->assign('items', $items);
  }
}