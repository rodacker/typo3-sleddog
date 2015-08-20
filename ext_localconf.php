<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kiruna_sleddog_tours/Configuration/TSConfig/Page/pagetsconfig.txt">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kiruna_sleddog_tours/Configuration/TSConfig/User/usertsconfig.txt">'
);


// add custom content elements to wizard
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
'mod {
     wizards.newContentElement.wizardItems.extra {
       header = LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:wizard.extra
       elements {
         teaser {
           icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/img/favicon/favicon-32x32.png
           title = LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:wizard.teaser_title
           description = LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:wizard.teaser_description
           tt_content_defValues {
             CType = teaser
             colPos = 1
           }
         }
        overlay {
           icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/img/favicon/favicon-32x32.png
           title = LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:wizard.overlay_title
           description = LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:wizard.overlay_description
           tt_content_defValues {
             CType = overlay
             colPos = 0
           }
         }
         carousel {
           icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/img/favicon/favicon-32x32.png
           title = LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:wizard.carousel_title
           description = LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:wizard.carousel_description
           tt_content_defValues {
             CType = carousel
             colPos = 2
           }
         }
       }
     }
   }'
);