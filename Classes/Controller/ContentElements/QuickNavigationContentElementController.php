<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Controller\ContentElements;

use T3v\T3vCore\Controller\ContentElementController;
use T3v\T3vNavigations\Domain\Repository\QuickNavigationItemRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The quick navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class QuickNavigationContentElementController extends ContentElementController
{
    /**
     * The quick navigation item repository.
     *
     * @var \T3v\T3vNavigations\Domain\Repository\QuickNavigationItemRepository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    protected $quickNavigationItemRepository;

    /**
     * Injects the quick navigation item repository.
     *
     * @param \T3v\T3vNavigations\Domain\Repository\QuickNavigationItemRepository $quickNavigationItemRepository The quick navigation item repository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function injectQuickNavigationItemRepository(QuickNavigationItemRepository $quickNavigationItemRepository
    ): void {
        $this->quickNavigationItemRepository = $quickNavigationItemRepository;
    }

    /**
     * The index action.
     *
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function indexAction(): void
    {
        $settings = $this->settings;

        if (!empty($settings['pages'])) {
            $settings['pages'] = GeneralUtility::intExplode(',', $settings['pages'], true);
        }

        if (!empty($settings['items']) || !empty($settings['moreItems'])) {
            $uids = array_merge(
                GeneralUtility::intExplode(',', $settings['items'], true),
                GeneralUtility::intExplode(',', $settings['moreItems'], true)
            );

            $settings['items'] = $this->quickNavigationItemRepository->findByUids($uids);
        }

        $this->view->assign('settings', $settings);
    }
}
