<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/***************
 * Default TypoScript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Kiruna Sleddog Tours'
);

// add a new doktype for the tours
$customPageDoktype = 111;
$customPageIcon = '../typo3conf/ext/kiruna_sleddog_tours/Resources/Public/img/favicon/favicon-16x16.png';

// Add the new doktype to the list of page types
$GLOBALS['PAGES_TYPES'][$customPageDoktype] = array(
    'type' => 'sys',
    'icon' => $customPageIcon,
    'allowedTables' => '*'
);

// Add the new doktype to the page type selector
$GLOBALS['TCA']['pages']['columns']['doktype']['config']['items'][] = array(
    'LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:tour_page_type',
    $customPageDoktype,
    $customPageIcon
);

// Also add the new doktype to the page language overlays type selector (so that translations can inherit the same type)
$GLOBALS['TCA']['pages_language_overlay']['columns']['doktype']['config']['items'][] = array(
    'LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:tour_page_type',
    $customPageDoktype,
    $customPageIcon
);

// Add the icon for the new doktype
\TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon('pages', $customPageDoktype, $customPageIcon);

// Add the new doktype to the list of types available from the new page menu at the top of the page tree
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    'options.pageTree.doktypesToShowInNewPageDragArea := addToList(' . $customPageDoktype . ')'
);