<?php
namespace T3v\T3vNavigations\Domain\Repository\Traits;

use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

/**
 * The localization trait.
 *
 * @package T3v\T3vNavigations\Domain\Repository\Traits
 */
trait LocalizationTrait {
  /**
   * The life cycle method.
   */
  public function initializeObject() {
    $querySettings = $this->objectManager->get(Typo3QuerySettings::class);
    $querySettings->setIgnoreEnableFields(false);
    $querySettings->setRespectStoragePage(false);
    $querySettings->setRespectSysLanguage(true);

    // Switch by system language UID (Language Fallback Mapping)
    //
    // $sysLanguageUid = $this->languageService->getSysLanguageUid();
    //
    // switch ($sysLanguageUid) {
    //   case 0:
    //     $querySettings->setLanguageUid(0);
    //
    //     break;
    //
    //   case 1:
    //     $querySettings->setLanguageUid(1);
    //
    //     break;
    //
    //   default:
    //     $querySettings->setLanguageUid(0);
    // }

    $this->setDefaultQuerySettings($querySettings);
  }
}
