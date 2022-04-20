<?php

use R3H6\Jobqueue\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Log\Writer\FileWriter;

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jobqueue'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jobqueue'] = [];
}

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = 'R3H6\\Jobqueue\\Command\\JobCommand';
}


$GLOBALS['TYPO3_CONF_VARS']['LOG']['TYPO3']['Jobqueue']['writerConfiguration'] = [
    ExtensionConfiguration::get('logLevel') => [
        FileWriter::class => [
           'logFile' => 'typo3temp/logs/jobs.log'
        ]
    ]
];
