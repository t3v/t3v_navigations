<?php
namespace T3v\T3vNavigations\Controller\ContentElements;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use T3v\T3vNavigations\Domain\Repository\QuickNavigationItemRepository;

/**
 * The quick navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class QuickNavigationContentElementController extends ContentElementController {
  /**
   * The quick navigation item repository.
   *
   * @var \T3v\T3vNavigations\Domain\Repository\QuickNavigationItemRepository
   * @inject
   */
  protected $quickNavigationItemRepository;

  /**
   * The index action.
   */
  public function indexAction() {
    $settings = $this->settings;

    $primaryItems     = [];
    $primaryItemsUids = GeneralUtility::intExplode(',', $settings['primaryItems'], true);

    foreach($primaryItemsUids as $uid) {
      $primaryItems[] = $this->quickNavigationItemRepository->findByUid($uid);
    }

    $secondaryItems     = [];
    $secondaryItemsUids = GeneralUtility::intExplode(',', $settings['secondaryItems'], true);

    foreach($secondaryItemsUids as $uid) {
      $secondaryItems[] = $this->quickNavigationItemRepository->findByUid($uid);
    }

    $this->view->assign('settings', $settings);
    $this->view->assign('primaryItems', $primaryItems);
    $this->view->assign('secondaryItems', $secondaryItems);
  }
}