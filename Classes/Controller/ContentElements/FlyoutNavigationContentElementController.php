<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Controller\ContentElements;

use T3v\T3vCore\Controller\ContentElementController;
use T3v\T3vNavigations\Domain\Repository\FlyoutNavigationItemRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The flyout navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class FlyoutNavigationContentElementController extends ContentElementController
{
    /**
     * The flyout navigation item repository.
     *
     * @var \T3v\T3vNavigations\Domain\Repository\FlyoutNavigationItemRepository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    protected $flyoutNavigationItemRepository;

    /**
     * Injects the flyout navigation item repository.
     *
     * @param \T3v\T3vNavigations\Domain\Repository\FlyoutNavigationItemRepository $flyoutNavigationItemRepository The flyout navigation item repository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function injectFlyoutNavigationItemRepository(
        FlyoutNavigationItemRepository $flyoutNavigationItemRepository
    ): void {
        $this->flyoutNavigationItemRepository = $flyoutNavigationItemRepository;
    }

    /**
     *
     * The index action.
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        if (!empty($settings['items']) || !empty($settings['moreItems'])) {
            $uids = array_merge(
                GeneralUtility::intExplode(',', $settings['items'], true),
                GeneralUtility::intExplode(',', $settings['moreItems'], true)
            );

            $settings['items'] = $this->flyoutNavigationItemRepository->findByUids($uids);
        }

        $this->view->assign('settings', $settings);
    }
}
