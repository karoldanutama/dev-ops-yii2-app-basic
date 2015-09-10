<?php 

$config = [
    'components' => [
    	'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;port=3306;dbname=devops',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
    ],
    'params' => $params,
];
return $config;
