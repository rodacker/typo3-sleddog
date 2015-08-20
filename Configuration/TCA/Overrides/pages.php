<?php

// Add some fields to FE Users table to show TCA fields definitions
$temporaryColumns = array(
    'tx_kiruna_sleddog_tours_tour_teaser' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:tx_kiruna_sleddog_tours_tour_teaser',
        'config' => array(
            'type' => 'text',
            'cols' => '80',
            'rows' => '5',
        ),
        'defaultExtras' => 'richtext[]'
    ),
    'tx_kiruna_sleddog_tours_tour_details' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:tx_kiruna_sleddog_tours_tour_teaser',
        'config' => array(
            'type' => 'text',
            'cols' => '80',
            'rows' => '10',
        ),
        'defaultExtras' => 'richtext[]'
    ),
    'tx_kiruna_sleddog_tours_tour_price' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:tx_kiruna_sleddog_tours_tour_price',
        'config' => array(
            'type' => 'input'
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages',
    $temporaryColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'tx_kiruna_sleddog_tours_tour_teaser, tx_kiruna_sleddog_tours_tour_detail, tx_kiruna_sleddog_tours_tour_price'
);

// palettes for backend forms
$GLOBALS['TCA']['pages']['palettes']['tour'] = array(
    'showitem' => '
				tx_kiruna_sleddog_tours_tour_teaser;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:tx_kiruna_sleddog_tours_tour_teaser,
				--linebreak--,
				tx_kiruna_sleddog_tours_tour_details;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:tx_kiruna_sleddog_tours_tour_details,
				--linebreak--,
				tx_kiruna_sleddog_tours_tour_price;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:tx_kiruna_sleddog_tours_tour_price,
			',
    'canNotCollapse' => 1
);

// configure form
$GLOBALS['TCA']['pages']['types'][111]['showitem'] =
    '--palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.standard;standard,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.title;title,
    --div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.access,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.access;access,
    --div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.metadata,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes .abstract;abstract,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.metatags;metatags,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.editorial;editorial,
    --div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.layout;layout,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.replace;replace,
    --div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.behaviour,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.links;links,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.caching;caching,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.language;language,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.module;module,
    --div--;LLL:EXT:cms/locallang_tca.xlf:pages.tabs.resources,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.media;media,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.storage;storage,
    --palette--;LLL:EXT:cms/locallang_tca.xlf:pages.palettes.config;config,
    --div--;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:pages.tabs.tours,
    --palette--;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:pages.palettes.tour;tour';





