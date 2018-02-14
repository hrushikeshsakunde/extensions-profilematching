<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails',
        'label' => 'userid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
        ],
        'searchFields' => 'userid,title,fullname,email,gender,major,language,activity,visitedplaces',
        'iconfile' => 'EXT:profilematching/Resources/Public/Icons/tx_profilematching_domain_model_userdetails.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, userid, title, fullname, email, gender, major, language, activity, visitedplaces',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, userid, title, fullname, email, gender, major, language, activity, visitedplaces'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
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
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_profilematching_domain_model_userdetails',
                'foreign_table_where' => 'AND tx_profilematching_domain_model_userdetails.pid=###CURRENT_PID### AND tx_profilematching_domain_model_userdetails.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],

        'userid' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.userid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'title' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'fullname' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.fullname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'gender' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.gender',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'major' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.major',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'language' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.language',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'activity' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.activity',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'visitedplaces' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetails.visitedplaces',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
    
    ],
];
