<?php
defined('TYPO3_MODE') or die();

$fields = array(
        'background' => array(
                'exclude' => 1,
                'label' => 'Image to Background',
                'config' => array(
					'type' => 'check',
					'default' => 0
                ),
        )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'background');