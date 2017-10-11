<?php
namespace T3v\T3vNavigations\Controller\ContentElements;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

/**
 * Subpages Navigation Content Element Controller Class
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class SubpagesNavigationContentElementController extends ContentElementController {
  /**
   * The index action.
   *
   * @return void
   */
  public function indexAction() {
    $settings = $this->settings;

    $this->view->assign('settings', $settings);
  }
}