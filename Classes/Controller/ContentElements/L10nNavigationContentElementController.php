<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Controller\ContentElements;

use T3v\T3vCore\Controller\ContentElementController;

/**
 * The l10n navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class L10nNavigationContentElementController extends ContentElementController
{
    /**
     *
     * The index action.
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        $this->view->assign('settings', $settings);
    }
}
