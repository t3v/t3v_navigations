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

    // --- Default TYPO3 columns ---

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
      'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'sys_language',
        'foreign_table_where' => 'ORDER BY sys_language.title',
        'items' => [
          ['LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages', -1],
          ['LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 0]
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
      'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['', 0]
        ],
        'foreign_table' => 'tx_t3vnavigations_domain_model_quick_navigation_item',
        'foreign_table_where' => 'AND tx_t3vnavigations_domain_model_quick_navigation_item.pid=###CURRENT_PID### AND tx_t3vnavigations_domain_model_quick_navigation_item.sys_language_uid IN (-1,0)',
        'default' => 0
      ],
      'displayCond' => 'FIELD:sys_language_uid:>:0'
    ],

    'l10n_diffsource' => [
      'config' => [
        'type' => 'passthrough',
        'default' => ''
      ]
    ],

    'starttime' => [
      'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
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
      'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
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

    'hidden' => [
      'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
      'config' => [
        'type' => 'check',
        'items' => [
          '1' => [
            '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
          ]
        ],
        'default' => 0
      ],
      'exclude' => true
    ],

    'cruser_id' => [
      'label' => 'cruser_id',
      'config' => [
        'type' => 'passthrough'
      ]
    ],

    'editlock' => [
      'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:editlock',
      'config' => [
        'type' => 'check',
        'items' => [
          '1' => [
            '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
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
    'iconfile' => "${iconsFolder}/TCA/QuickNavigationItem.svg",
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'cruser_id' => 'cruser_id',
    'editlock' => 'editlock',
    'crdate' => 'crdate',
    'tstamp' => 'tstamp',
    // 'sortby' => 'sorting',
    'default_sortby' => 'ORDER BY title ASC',
    'delete' => 'deleted',
    'enablecolumns' => [
      'starttime' => 'starttime',
      'endtime' => 'endtime',
      'disabled' => 'hidden'
    ],
    'searchFields' => 'uid, title, label',
    'origUid' => 't3_origuid',
    'hideTable' => false,
    'versioningWS' => true
  ],

  // === Interface ===

  'interface' => [
    'showRecordFieldList' => 'title, label, sys_language_uid, l10n_parent, l10n_diffsource, starttime, endtime, hidden',
    'maxDBListItems' => 50,
    'maxSingleDBListItems' => 50
  ],

  // === Types ===

  'types' => [
    0 => [
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
      'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource',
      'canNotCollapse' => true
    ],

    'visibility' => [
      'showitem' => 'hidden',
      'canNotCollapse' => true
    ],

    'access' => [
      'showitem' => 'starttime, endtime',
      'canNotCollapse' => true
    ]
  ]
];