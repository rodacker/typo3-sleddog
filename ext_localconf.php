<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kiruna_sleddog_tours/Configuration/TSConfig/Page/pagetsconfig.txt">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kiruna_sleddog_tours/Configuration/TSConfig/User/usertsconfig.txt">'
);
