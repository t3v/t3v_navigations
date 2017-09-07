<?php
namespace T3v\T3vNavigations\Controller\ContentElements;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

/**
 * Quick Navigation Content Element Controller Class
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class QuickNavigationContentElementController extends ContentElementController {
  /**
   * The overview navigation item repository.
   *
   * @var \T3v\T3vNavigations\Domain\Repository\QuickNavigationItemRepository
   * @inject
   */
  protected $quickNavigationItemRepository;

  /**
   * The index action.
   *
   * @return void
   */
  public function indexAction() {
    $primaryItems       = [];
    $primaryItemsUids   = GeneralUtility::intExplode(',', $this->settings['primaryItems'], true);
    $secondaryItems     = [];
    $secondaryItemsUids = GeneralUtility::intExplode(',', $this->settings['secondaryItems'], true);

    foreach($primaryItemsUids as $uid) {
      $primaryItems[] = $this->quickNavigationItemRepository->findByUid($uid);
    }

    foreach($secondaryItemsUids as $uid) {
      $secondaryItems[] = $this->quickNavigationItemRepository->findByUid($uid);
    }

    $this->view->assign('primaryItems', $primaryItems);
    $this->view->assign('secondaryItems', $secondaryItems);
  }
}