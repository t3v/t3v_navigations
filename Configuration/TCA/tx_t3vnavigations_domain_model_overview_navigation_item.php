<?php
/**
 * The overview navigation item TCA configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_navigations';
$lll = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_tca.xlf');
$iconsFolder = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

return [
    // === Columns ===

    'columns' => [
        // --- Custom Columns ---

        'name' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.name',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim, required',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'label' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.label',
            'config' => [
                'type' => 'input',
                'max' => 255,
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'type' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [$lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.type.default', 'default']
                ],
                'default' => 'default',
                'behaviour' => [
                    'allowLanguageSynchronization' => false
                ],
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false
                    ]
                ]
            ],
            'exclude' => true
        ],

        'handle' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.handle',
            'config' => [
                'type' => 'slug',
                'generatorOptions' => [
                    'fields' => ['name'],
                    'fieldSeparator' => '-',
                    'prefixParentPageSlug' => false
                ],
                'fallbackCharacter' => '-',
                'prependSlash' => false,
                'default' => '-',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'abstract' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.abstract',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'eval' => 'trim',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'thumbnails' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.thumbnails',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'thumbnails',
                [
                    'foreign_match_fields' => [
                        'fieldname' => 'thumbnails',
                        'tablenames' => 'tx_t3vnavigations_domain_model_overview_navigation_item',
                        'table_local' => 'sys_file'
                    ],
                    'foreign_types' => [
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                             --palette--;;filePalette'
                        ]
                    ],
                    'minitems' => 0,
                    'maxitems' => 10,
                    'appearance' => [
                        'createNewRelationLinkTitle' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.thumbnails.createNewRelation.link.title',
                        'showAllLocalizationLink' => true,
                        'showPossibleLocalizationRecords' => true,
                        'showRemovedLocalizationRecords' => true,
                        'showSynchronizationLink' => true
                    ],
                    'behaviour' => [
                        'allowLanguageSynchronization' => true
                    ]
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            'exclude' => true
        ],

        'page' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.page',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'pages',
                'minitems' => 0,
                'maxitems' => 1,
                'size' => 1,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ],
                'suggestOptions' => [
                    'default' => [
                        'additionalSearchFields' => 'nav_title, alias, url',
                        'addWhere' => 'AND pages.doktype = 1'
                    ]
                ]
            ]
        ],

        'link' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'max' => 255,
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'folder, spec',
                            'blindLinkFields' => 'class, params'
                        ]
                    ]
                ],
                'softref' => 'typolink',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'layout' => [
            'label' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.layout',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectCheckBox',
                'items' => [
                    [$lll . 'tx_t3vnavigations_domain_model_overview_navigation_item.layout.default', 'default']
                ],
                'default' => 'default',
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        // --- Standard columns ---

        'uid' => [
            'label' => 'uid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'pid' => [
            'label' => 'pid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'sys_language_uid' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.sysLanguageUid.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false
                    ]
                ]
            ],
            'exclude' => true
        ],

        'l10n_parent' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.l10nParent.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_t3vnavigations_domain_model_overview_navigation_item',
                'foreign_table_where' => 'AND {#tx_t3vnavigations_domain_model_overview_navigation_item}.{#pid}=###CURRENT_PID### AND {#tx_t3vnavigations_domain_model_overview_navigation_item}.{#sys_language_uid} IN (-1,0)',
                'items' => [
                    ['', 0],
                ],
                'default' => 0
            ],
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true
        ],

        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],

        'hidden' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.hidden.label',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ]
            ],
            'exclude' => true
        ],

        'starttime' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.starttime.label',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime, int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'endtime' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.endtime.label',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime, int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
            'exclude' => true
        ],

        'fe_group' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.feGroup.label',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
                'items' => [
                    ['LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:shared.hideAtLogin.label', -1],
                    ['LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:shared.anyLogin.label', -2],
                    ['LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:shared.userGroups.label', '--div--']
                ],
                'exclusiveKeys' => '-1, -2',
                'size' => 5,
                'maxitems' => 20
            ],
            'exclude' => true
        ],

        'editlock' => [
            'label' => 'LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:columns.editlock.label',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => ''
                    ]
                ]
            ],
            'exclude' => true
        ],

        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'cruser_id' => [
            'label' => 'cruser_id',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'passthrough'
            ]
        ],

        'sorting' => [
            'label' => 'sorting',
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ],

    // === Ctrl ===

    'ctrl' => [
        'title' => $lll . 'tx_t3vnavigations_domain_model_overview_navigation_item',
        'label' => 'name',
        // 'label_alt' => 'label',
        // 'label_alt_force' => 1,
        // 'descriptionColumn' => 'abstract',
        'type' => 'type',
        // 'typeicon_column' => 'type',
        // 'typeicon_classes' => [
        //   'default' => 'mimetypes-x-content-text'
        // ],
        // 'thumbnail' => 'thumbnail',
        'iconfile' => "${iconsFolder}/TCA/OverviewNavigationItem.svg",
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'editlock' => 'editlock',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'tstamp' => 'tstamp',
        // 'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY name ASC',
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group'
        ],
        'searchFields' => 'name, label, handle, abstract',
        // 'hideAtCopy' => true,
        // 'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'useColumnsForDefaultValues' => 'type, sys_language_uid',
        // 'hideTable' => true,
        'versioningWS' => true
    ],

    // === Interface ===

    'interface' => [
        'maxDBListItems' => 20,
        'maxSingleDBListItems' => 100
    ],

    // === Types ===

    'types' => [
        0 => [
            'showitem' => '
                --palette--;;general,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.appearance.label,
                --palette--;;appearance,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.language.label,
                --palette--;;language,
                --div--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:tabs.access.label,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.visibility.label;visibility,
                --palette--;LLL:EXT:t3v_translations/Resources/Private/Language/locallang_tca.xlf:palettes.access.label;access
            '
        ]
    ],

    // === Palettes ===

    'palettes' => [
        'general' => [
            'showitem' => '
                name, --linebreak--,
                label, --linebreak--,
                type, --linebreak--,
                handle, --linebreak--,
                abstract, --linebreak--,
                thumbnails, --linebreak--,
                page, --linebreak--,
                link
            ',
            'canNotCollapse' => true
        ],

        'appearance' => [
            'showitem' => 'layout',
            'canNotCollapse' => true
        ],

        'language' => [
            'showitem' => 'sys_language_uid, l10n_parent',
            'canNotCollapse' => true
        ],

        'visibility' => [
            'showitem' => 'hidden',
            'canNotCollapse' => true
        ],

        'access' => [
            'showitem' => '
                starttime, endtime, --linebreak--,
                fe_group, --linebreak--,
                editlock
            ',
            'canNotCollapse' => true
        ]
    ]
];
