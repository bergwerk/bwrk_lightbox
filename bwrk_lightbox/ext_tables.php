<?php
	
	if(!defined('TYPO3_MODE')) die ('Access denied.');
	
//	Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'bwrk_produkte_view', 'Produkte Anzeige');
//	Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'bwrk_produkte_view_single', 'Produkte Anzeige (Single)');
	
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'BERGWERK Lightbox');
	
?>