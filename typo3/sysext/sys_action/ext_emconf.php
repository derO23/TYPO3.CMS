<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'User>Task Center, Actions',
    'description' => 'Actions are \'programmed\' admin tasks which can be performed by selected regular users from the Task Center. An action could be creation of backend users, fixed SQL SELECT queries, listing of records, direct edit access to selected records etc.',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '9.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.1.0-9.1.0',
            'taskcenter' => '9.1.0-9.1.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
