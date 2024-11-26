<?php defined('TYPO3') or die();

// ---------------------------------------------------------------------------------------------------------------------
// Weitere Felder in tx_powermail_domain_model_field
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_powermail_domain_model_field', [
	'tx_powermail_column_width' => [
		'exclude' => true,
		'label' => 'LLL:EXT:ps14_powermail/Resources/Private/Language/locallang_tca.xlf:field.column-width',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				['', 0],
			],
			'size' => 1,
			'maxitems' => 1,
			'eval' => ''
		],
	],
]);

// ---------------------------------------------------------------------------------------------------------------------
// Felder den Paletten hinzufuegen
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tx_powermail_domain_model_field', '4', 'tx_powermail_column_width', 'after:css');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tx_powermail_domain_model_field', '41', 'tx_powermail_column_width', 'after:css');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tx_powermail_domain_model_field', '42', 'tx_powermail_column_width', 'after:css');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tx_powermail_domain_model_field', '43', 'tx_powermail_column_width', 'after:css');