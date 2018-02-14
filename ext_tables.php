<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BuddySystem.Profilematching',
            'Userdetailsmanagement',
            'Userdetails_Management'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BuddySystem.Profilematching',
            'Userlinkinfo',
            'Userlink_Info'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BuddySystem.Profilematching',
            'Userlinkmanagement',
            'UserLink_Management'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('profilematching', 'Configuration/TypoScript', 'Profile_Matching');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_profilematching_domain_model_userdetails', 'EXT:profilematching/Resources/Private/Language/locallang_csh_tx_profilematching_domain_model_userdetails.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_profilematching_domain_model_userdetails');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_profilematching_domain_model_userlink', 'EXT:profilematching/Resources/Private/Language/locallang_csh_tx_profilematching_domain_model_userlink.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_profilematching_domain_model_userlink');

    }
);
