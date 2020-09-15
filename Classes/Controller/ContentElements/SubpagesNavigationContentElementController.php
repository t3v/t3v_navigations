<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Controller\ContentElements;

use T3v\T3vCore\Controller\ContentElementController;

/**
 * The subpages navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class SubpagesNavigationContentElementController extends ContentElementController
{
    /**
     * The index action.
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        $this->view->assign('settings', $settings);
    }
}
