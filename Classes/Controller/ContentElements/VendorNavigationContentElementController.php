<?php
declare(strict_types=1);

namespace T3v\T3vNavigations\Controller\ContentElements;

use T3v\T3vCore\Controller\ContentElementController;
use T3v\T3vNavigations\Domain\Repository\VendorNavigationItemRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The vendor navigation content element controller class.
 *
 * @package T3v\T3vNavigations\Controller\ContentElements
 */
class VendorNavigationContentElementController extends ContentElementController
{
    /**
     * The vendor navigation item repository.
     *
     * @var \T3v\T3vNavigations\Domain\Repository\VendorNavigationItemRepository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    protected $vendorNavigationItemRepository;

    /**
     * Injects the vendor navigation item repository.
     *
     * @param \T3v\T3vNavigations\Domain\Repository\VendorNavigationItemRepository $vendorNavigationItemRepository The vendor navigation item repository
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    public function injectVendorNavigationItemRepository(
        VendorNavigationItemRepository $vendorNavigationItemRepository
    ): void {
        $this->vendorNavigationItemRepository = $vendorNavigationItemRepository;
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

            $settings['items'] = $this->vendorNavigationItemRepository->findByUids($uids);
        }


        $this->view->assign('settings', $settings);
    }
}
