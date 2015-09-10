<?php

$config = [
    'basePath' => dirname(__DIR__),
    'components' => [
	     'cookieValidationKey' => 'Andrei',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
];

return $config;
