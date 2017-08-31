<?php
defined('TYPO3_MODE') or die('Access denied.');

$extkey    = 't3v_navigations';
$resources = "EXT:${extkey}/Resources";
$lll       = "LLL:${resources}/Private/Language/locallang_tca.xlf:";

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
        'eval' => 'trim, required'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'link' => [
      'label' => $lll . 'tx_t3vnavigations_domain_model_quick_navigation_item.link',
      'config' => [
        'type' => 'input',
        'size' => 42,
        'max' => 255,
        'eval' => 'trim, required',
        'wizards' => [
          'link' => [
            'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
            'type' => 'popup',
            'icon' => 'actions-wizard-link',
            'module' => [
              'name' => 'wizard_link'
            ],
            'params' => [
              'blindLinkOptions' => 'folder, file, mail, spec',
              'blindLinkFields' => 'class, params'
            ],
            'JSopenParams' => 'height=600,width=800,status=0,menubar=0,scrollbars=1'
          ]
        ],
        'softref' => 'typolink'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
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

    'tstamp' => [
      'label' => 'tstamp',
      'config' => [
        'type' => 'passthrough'
      ]
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

    'starttime' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
      'config' => [
        'type' => 'input',
        'size' => 13,
        'max' => 20,
        'eval' => 'datetime',
        'default' => 0,
        'range' => [
          'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
        ]
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'endtime' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
      'config' => [
        'type' => 'input',
        'size' => 13,
        'max' => 20,
        'eval' => 'datetime',
        'default' => 0,
        'range' => [
          'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
        ]
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'hidden' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
      'config' => [
        'type' => 'check'
      ],
      'exclude' => true
    ],

    'sys_language_uid' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'special' => 'languages',
        'items' => [
          [
            'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
            -1,
            'flags-multiple'
          ],
        ],
        'default' => 0
      ],
      'exclude' => 1
    ],

    'l10n_parent' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['', 0]
        ],
        'foreign_table' => 'tx_t3vnavigations_domain_model_quick_navigation_item',
        'foreign_table_where' => 'AND tx_t3vnavigations_domain_model_quick_navigation_item.pid=###CURRENT_PID### AND tx_t3vnavigations_domain_model_quick_navigation_item.sys_language_uid IN (-1,0)'
      ],
      'displayCond' => 'FIELD:sys_language_uid:>:0',
      'exclude' => 1
    ],

    'l10n_diffsource' => [
      'config' => [
        'type' => 'passthrough',
        'default' => ''
      ]
    ]
  ],

  // === Ctrl ===

  'ctrl' => [
    'title' => $lll . 'tx_t3vnavigations_domain_model_quick_navigation_item',
    'label' => 'title',
    // 'label_alt' => 'abstract',
    // 'label_alt_force' => 1,
    // 'descriptionColumn' => 'description',
    'iconfile' => "${resources}/Public/Icons/TCA/QuickNavigationItem.svg",
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'cruser_id' => 'cruser_id',
    'origUid' => 't3_origuid',
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    // 'sortby' => 'sorting',
    'default_sortby' => 'ORDER BY title ASC',
    'enablecolumns' => [
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime'
    ],
    'searchFields' => 'title',
    'versioningWS' => true,
    'hideTable' => false
  ],

  // === Interface ===

  'interface' => [
    'showRecordFieldList' => 'title, hidden, starttime, endtime, sys_language_uid, l10n_parent, l10n_diffsource',
    'maxDBListItems' => 50,
    'maxSingleDBListItems' => 50
  ],

  // === Types ===

  'types' => [
    0 => [
      'showitem' => '
        --palette--;;paletteGeneral, --palette--;;paletteL10n,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access;, --palette--;;paletteAccess
      '
    ]
  ],

  // === Palettes ===

  'palettes' => [
    'paletteGeneral' => [
      'showitem' => '
        title, --linebreak--,
        link
      ',
      'columnsOverrides' => [
      ],
      'canNotCollapse' => true
    ],

    'paletteL10n' => [
      'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource',
      'canNotCollapse' => true
    ],

    'paletteAccess' => [
      'showitem' => '
        hidden, --linebreak--,
        starttime, endtime
      ',
      'canNotCollapse' => true
    ]
  ]
];