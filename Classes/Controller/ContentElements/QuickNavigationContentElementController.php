<?php
namespace T3v\T3vNavigations\Controller\ContentElements;

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
    $primaryItems   = $this->quickNavigationItemRepository->findByUids($this->settings['primaryItems']);
    $secondaryItems = $this->quickNavigationItemRepository->findByUids($this->settings['secondaryItems']);

    $this->view->assign('primaryItems', $primaryItems);
    $this->view->assign('secondaryItems', $secondaryItems);
  }
}