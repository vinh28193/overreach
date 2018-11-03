<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '4DRPNeVNJRNcfuxWF2cvZPO1AVCxH3a0',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
    'modules' => [
        'tester' => [
            'class' => 'application\modules\tester\Module',
        ],
    ]
];

// configuration adjustments for 'dev' environment
$config['bootstrap'][] = 'debug';
$config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
];

$config['bootstrap'][] = 'gii';
$config['modules']['gii'] = [
    'class' => 'yii\gii\Module',
    'generators' => [
        'test-module' => [
            'class' => 'application\components\gii\generators\module\Generator'
        ]
    ]
];
return $config;
