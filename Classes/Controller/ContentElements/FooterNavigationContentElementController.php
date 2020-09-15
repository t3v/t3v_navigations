<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Controller\ContentElements;

use T3v\T3vCore\Controller\ContentElementController;
use T3v\T3vNavigations\Domain\Repository\FooterNavigationItemRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The footer navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class FooterNavigationContentElementController extends ContentElementController
{
    /**
     * The footer navigation item repository.
     *
     * @var \T3v\T3vNavigations\Domain\Repository\FooterNavigationItemRepository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    protected $footerNavigationItemRepository;

    /**
     * Injects the footer navigation item repository.
     *
     * @param \T3v\T3vNavigations\Domain\Repository\FooterNavigationItemRepository $footerNavigationItemRepository The footer navigation item repository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function injectFooterNavigationItemRepository(
        FooterNavigationItemRepository $footerNavigationItemRepository
    ): void {
        $this->footerNavigationItemRepository = $footerNavigationItemRepository;
    }

    /**
     *
     * The index action.
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

            $settings['items'] = $this->footerNavigationItemRepository->findByUids($uids);
        }

        $this->view->assign('settings', $settings);
    }
}
