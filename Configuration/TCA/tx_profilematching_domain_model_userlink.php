<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userlink',
        'label' => 'senderid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
        ],
        'searchFields' => 'senderid,receiverid,status',
        'iconfile' => 'EXT:profilematching/Resources/Public/Icons/tx_profilematching_domain_model_userlink.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, senderid, receiverid, status',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, senderid, receiverid, status'],
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
                'foreign_table' => 'tx_profilematching_domain_model_userlink',
                'foreign_table_where' => 'AND tx_profilematching_domain_model_userlink.pid=###CURRENT_PID### AND tx_profilematching_domain_model_userlink.sys_language_uid IN (-1,0)',
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

        'senderid' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userlink.senderid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'receiverid' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userlink.receiverid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'status' => [
            'exclude' => false,
            'label' => 'LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userlink.status',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
    
    ],
];
