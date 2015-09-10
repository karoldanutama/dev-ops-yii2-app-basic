<?php

$config = [
    'basePath' => dirname(__DIR__),
    'components' => [
<<<<<<< HEAD
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'andrei',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
=======
>>>>>>> sl2
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
