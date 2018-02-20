<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ppi_tvplus_linkvalidator/Configuration/TsConfig/Page.tsconfig">'
);

/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Linkvalidator\LinkAnalyzer::class,
    'beforeAnalyzeRecord',
    \Ppi\Templavoilaplus\Linkvalidator\LinkAnalyzerSlot::class,
    'beforeAnalyzeRecordSlot'
);

// XClassing LinkValidator, as we need to get 2 functions public of this class
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Linkvalidator\LinkAnalyzer::class] = array(
    'className' => \Ppi\Templavoilaplus\Linkvalidator\Xclass\LinkAnalyzer::class
);
