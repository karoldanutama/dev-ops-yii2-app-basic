<?php 

$config = [
    'components' => [
    	'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;port=9306;dbname=devopstest',
            'username' => 'devtest',
            'password' => 'password',
            'charset' => 'utf8',
        ],
    ],
    'params' => $params,
];
return $config;