<?php

use yii\db\Migration;

class m150908_164402_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('Users', [
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT primary key',
            'username' => 'varchar(255) NOT NULL',
            'email' => 'varchar(255) NOT NULL',
            'password' => 'varchar(255) NOT NULL',
            'firstName' => 'text NOT NULL',
            'lastName' => 'text NOT NULL',
        ], 'ENGINE = InnoDB');
        
        $this->insert('Users', [
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('admin'),
            'firstName' => 'Admin',
            'lastName' => 'Admin',
        ]);
    }

    public function down()
    {
        $this->dropTable('Users');
    }
}
