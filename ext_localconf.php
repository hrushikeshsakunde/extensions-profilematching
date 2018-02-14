<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BuddySystem.Profilematching',
            'Userdetailsmanagement',
            [
                'Userdetails' => 'new,show,create,gotoHome'
            ],
            // non-cacheable actions
            [
                'Userdetails' => 'new,show,create,gotoHome'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BuddySystem.Profilematching',
            'Userlinkinfo',
            [
                'Userlink' => 'listProfiles,pendingRequests,gotoHome,send,accept',
                'Userdetails' => 'create'
            ],
            // non-cacheable actions
            [
                'Userlink' => 'listProfiles,pendingRequests,gotoHome,send,accept',
                'Userdetails' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BuddySystem.Profilematching',
            'Userlinkmanagement',
            [
                'Userlink' => 'friendList,gotoHome'
            ],
            // non-cacheable actions
            [
                'Userlink' => 'friendList,gotoHome'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    userdetailsmanagement {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('profilematching') . 'Resources/Public/Icons/user_plugin_userdetailsmanagement.svg
                        title = LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetailsmanagement
                        description = LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userdetailsmanagement.description
                        tt_content_defValues {
                            CType = list
                            list_type = profilematching_userdetailsmanagement
                        }
                    }
                    userlinkinfo {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('profilematching') . 'Resources/Public/Icons/user_plugin_userlinkinfo.svg
                        title = LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userlinkinfo
                        description = LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userlinkinfo.description
                        tt_content_defValues {
                            CType = list
                            list_type = profilematching_userlinkinfo
                        }
                    }
                    userlinkmanagement {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('profilematching') . 'Resources/Public/Icons/user_plugin_userlinkmanagement.svg
                        title = LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userlinkmanagement
                        description = LLL:EXT:profilematching/Resources/Private/Language/locallang_db.xlf:tx_profilematching_domain_model_userlinkmanagement.description
                        tt_content_defValues {
                            CType = list
                            list_type = profilematching_userlinkmanagement
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
