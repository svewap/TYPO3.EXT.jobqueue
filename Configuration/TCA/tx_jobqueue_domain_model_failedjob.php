<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:jobqueue/Resources/Private/Language/locallang_db.xlf:tx_jobqueue_domain_model_failedjob',
        'label' => 'crdate',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'dividers2tabs' => true,

        'enablecolumns' => [

        ],
        'searchFields' => 'crdate,queue_name,payload',
        'iconfile' => 'EXT:jobqueue/Resources/Public/Icons/tx_jobqueue_domain_model_failedjob.gif',
        'readOnly' => true,
        'rootLevel' => 1,
    ],
    'interface' => [
        'showRecordFieldList' => 'crdate, queue_name, payload',
    ],
    'types' => [
        '1' => ['showitem' => 'crdate, queue_name, payload'],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [

        'crdate' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.creationDate',
            'config' => [
                'readOnly' => 1,
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,datetime'
            ],
        ],
        'queue_name' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jobqueue/Resources/Private/Language/locallang_db.xlf:tx_jobqueue_domain_model_failedjob.queue_name',
            'config' => [
                'readOnly' => 1,
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'payload' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:jobqueue/Resources/Private/Language/locallang_db.xlf:tx_jobqueue_domain_model_failedjob.payload',
            'config' => [
                'readOnly' => 1,
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],

    ],
];