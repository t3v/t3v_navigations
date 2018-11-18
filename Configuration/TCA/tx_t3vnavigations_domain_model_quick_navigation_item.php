<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey = 't3v_navigations';
$lll          = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_tca.xlf');
$iconsFolder  = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

return [
  // === Columns ===

  'columns' => [
    // --- Custom columns ---

    'title' => [
      'label' => $lll . 'tx_t3vnavigations_domain_model_quick_navigation_item.title',
      'config' => [
        'type' => 'input',
        'size' => 42,
        'max' => 255,
        'eval' => 'trim, required',
        'behaviour' => [
          'allowLanguageSynchronization' => true
        ]
      ],
      'exclude' => true
    ],

    'label' => [
      'label' => $lll . 'tx_t3vnavigations_domain_model_quick_navigation_item.label',
      'config' => [
        'type' => 'input',
        'size' => 42,
        'max' => 255,
        'eval' => 'trim',
        'behaviour' => [
          'allowLanguageSynchronization' => true
        ]
      ],
      'exclude' => true
    ],

    'type' => [
      'label' => $lll . 'tx_t3vnavigations_domain_model_quick_navigation_item.type',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          [$lll . 'tx_t3vnavigations_domain_model_quick_navigation_item.type.default', 'default']
        ],
        'default' => 'default',
        'behaviour' => [
          'allowLanguageSynchronization' => true
        ],
        'fieldWizard' => [
          'selectIcons' => [
            'disabled' => false
          ]
        ]
      ],
      'exclude' => false
    ],

    'page' => [
      'label' => $lll . 'tx_t3vnavigations_domain_model_quick_navigation_item.page',
      'config' => [
        'type' => 'group',
        'internal_type' => 'db',
        'allowed' => 'pages',
        'size' => 1,
        'behaviour' => [
          'allowLanguageSynchronization' => true
        ]
      ],
      'exclude' => true
    ],

    'link' => [
      'label' => $lll . 'tx_t3vnavigations_domain_model_quick_navigation_item.link',
      'config' => [
        'type' => 'input',
        'renderType' => 'inputLink',
        'size' => 42,
        'max' => 255,
        'eval' => 'trim',
        'fieldControl' => [
          'linkPopup' => [
            'options' => [
              'blindLinkOptions' => 'folder, file, mail, page, spec',
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

    // --- TYPO3 columns ---

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
      'label' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:columns.sysLanguageUid.label',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'sys_language',
        'foreign_table_where' => 'ORDER BY sys_language.title',
        'items' => [
          ['LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:shared.allLanguages.label', -1],
          ['LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:shared.default.label', 0]
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
      'label' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:columns.l10nParent.label',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'tx_t3vnavigations_domain_model_quick_navigation_item',
        'foreign_table_where' => 'AND tx_t3vnavigations_domain_model_quick_navigation_item.pid=###CURRENT_PID### AND tx_t3vnavigations_domain_model_quick_navigation_item.sys_language_uid IN (-1,0)',
        'items' => [
          ['', 0]
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
      'label' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:columns.hidden.label',
      'config' => [
        'type' => 'check',
        'items' => [
          '1' => [
            '0' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:shared.enabled.label'
          ]
        ],
        'default' => 0
      ],
      'exclude' => true
    ],

    'starttime' => [
      'label' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:columns.starttime.label',
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
      'label' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:columns.endtime.label',
      'config' => [
        'type' => 'input',
        'renderType' => 'inputDateTime',
        'eval' => 'datetime, int',
        'range' => [
          'upper' => mktime(0, 0, 0, 1, 1, 2038)
        ],
        'default' => 0,
        'behaviour' => [
          'allowLanguageSynchronization' => true
        ]
      ],
      'exclude' => true
    ],

    'fe_group' => [
      'label' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:columns.feGroup.label',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectMultipleSideBySide',
        'foreign_table' => 'fe_groups',
        'foreign_table_where' => 'ORDER BY fe_groups.title',
        'items' => [
          ['LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:shared.hideAtLogin.label', -1],
          ['LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:shared.anyLogin.label', -2],
          ['LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:shared.userGroups.label', '--div--']
        ],
        'exclusiveKeys' => '-1, -2',
        'size' => 5,
        'maxitems' => 20
      ],
      'exclude' => true
    ],

    'editlock' => [
      'label' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:columns.editlock.label',
      'config' => [
        'type' => 'check',
        'items' => [
          '1' => [
            '0' => 'LLL:EXT:t3v_core/Resources/Private/Language/locallang_tca.xlf:shared.enabled.label'
          ]
        ],
        'default' => 0
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
    'title' => $lll . 'tx_t3vnavigations_domain_model_quick_navigation_item',
    'label' => 'title',
    'label_alt' => 'label',
    // 'label_alt_force' => 1,
    // 'descriptionColumn' => 'description',
    'type' => 'type',
    // 'typeicon_column' => 'type',
    // 'typeicon_classes' => [
    //   'default' => 'mimetypes-x-content-text'
    // ],
    // 'thumbnail' => 'thumbnail',
    'iconfile' => "${iconsFolder}/TCA/QuickNavigationItem.svg",
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'editlock' => 'editlock',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'tstamp' => 'tstamp',
    // 'sortby' => 'sorting',
    'default_sortby' => 'ORDER BY title ASC',
    'delete' => 'deleted',
    'origUid' => 't3_origuid',
    'enablecolumns' => [
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime',
      'fe_group' => 'fe_group'
    ],
    'searchFields' => 'uid, title, label, type',
    // 'hideAtCopy' => true,
    // 'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
    'useColumnsForDefaultValues' => 'type, sys_language_uid',
    // 'hideTable' => true,
    'versioningWS' => true
  ],

  // === Interface ===

  'interface' => [
    'showRecordFieldList' => 'title, label, type, page, link, sys_language_uid, l10n_parent, hidden, starttime, endtime',
    'maxDBListItems' => 20,
    'maxSingleDBListItems' => 100
  ],

  // === Types ===

  'types' => [
    'default' => [
      'showitem' => '
        --palette--;;general,
        --div--;LLL:EXT:t3v_core/Resources/Private/Language/locallang_ttc.xlf:tabs.language.label,
        --palette--;;language,
        --div--;LLL:EXT:t3v_core/Resources/Private/Language/locallang_ttc.xlf:tabs.access.label,
        --palette--;LLL:EXT:t3v_core/Resources/Private/Language/locallang_ttc.xlf:palettes.visibility.label;visibility,
        --palette--;LLL:EXT:t3v_core/Resources/Private/Language/locallang_ttc.xlf:palettes.access.label;access
      '
    ]
  ],

  // === Palettes ===

  'palettes' => [
    'general' => [
      'showitem' => '
        title, --linebreak--,
        label, --linebreak--,
        page, --linebreak--,
        link
      ',
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