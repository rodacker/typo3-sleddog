<?php

defined('TYPO3_MODE') or die();

//------------------------------------
// custom content element: teaser
//------------------------------------

// palette
$GLOBALS['TCA']['tt_content']['palettes']['teaser'] = [
        'showitem' => '
				image;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:teaser.image,
				--linebreak--,
				header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
				--linebreak--,
				subheader;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:teaser.subheader,
				--linebreak--,
				header_link;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:teaser.header_link,
			',
        'canNotCollapse' => 1
];

// configure form
$GLOBALS['TCA']['tt_content']['types']['teaser'] = [
    'showitem' => '
                    --palette--;LLL:EXT:kiruna_sleddog_tours/locallang_be.xlf:teaser.title;teaser,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended'
];

// add to CType list
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:teaser.title',
    'teaser',
    'EXT:kiruna_sleddog_tours/Resources/Public/img/favicon/favicon-32x32.png'
];

//-----------------------------------------
// custom content element: overlay element
//-----------------------------------------

// palette
$GLOBALS['TCA']['tt_content']['palettes']['overlay'] = [
        'showitem' => '
				image;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:overlay.image,
				--linebreak--,
				header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
				--linebreak--,
				subheader;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:overlay.subheader,
				--linebreak--,
				bodytext;LLL:EXT:lang/locallang_general.xlf:LGL.text,
				',
        'canNotCollapse' => 1
];

// configure form
$GLOBALS['TCA']['tt_content']['types']['overlay'] = [
    'showitem' => '
                    --palette--;LLL:EXT:kiruna_sleddog_tours/locallang_be.xlf:overlay.title;overlay,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended'
];

// add to CType list
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:overlay.title',
    'overlay',
    'EXT:kiruna_sleddog_tours/Resources/Public/img/favicon/favicon-32x32.png'
];


//------------------------------------
// custom content element: carousel
//------------------------------------

// palette
$GLOBALS['TCA']['tt_content']['palettes']['carousel'] = [
        'showitem' => 'image;LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:carousel.image,
        				--linebreak--,
        				header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
            ',
        'canNotCollapse' => 1
];

// configure form
$GLOBALS['TCA']['tt_content']['types']['carousel'] = [
    'showitem' => '
                    --palette--;LLL:EXT:kiruna_sleddog_tours/locallang_be.xlf:carousel.title;carousel,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended'
];

// add to CType list
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:kiruna_sleddog_tours/Resources/Private/Language/locallang_be.xlf:carousel.title',
    'carousel',
    'EXT:kiruna_sleddog_tours/Resources/Public/img/favicon/favicon-32x32.png'
];
