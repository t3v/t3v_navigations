<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Controller\ContentElements;

use T3v\T3vCore\Controller\ContentElementController;
use T3v\T3vNavigations\Domain\Repository\OverviewNavigationItemRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The overview navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class OverviewNavigationContentElementController extends ContentElementController
{
    /**
     * The overview navigation item repository.
     *
     * @var \T3v\T3vNavigations\Domain\Repository\OverviewNavigationItemRepository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    protected $overviewNavigationItemRepository;

    /**
     * Injects the overview navigation item repository.
     *
     * @param \T3v\T3vNavigations\Domain\Repository\OverviewNavigationItemRepository $overviewNavigationItemRepository The overview navigation item repository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function injectOverviewNavigationItemRepository(
        OverviewNavigationItemRepository $overviewNavigationItemRepository
    ): void {
        $this->overviewNavigationItemRepository = $overviewNavigationItemRepository;
    }

    /**
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

            $settings['items'] = $this->overviewNavigationItemRepository->findByUids($uids);
        }

        $this->view->assign('settings', $settings);
    }
}
