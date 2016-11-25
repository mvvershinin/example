<?php

use yii\db\Migration;

class m160404_140242_create_tables extends Migration
{
    public function up()
    {
$this->execute($this->addUserSql());
    }
private function addUserSql()
{
    $password = Yii::$app->security->generatePasswordHash('cnf1Com2');
    $auth_key = Yii::$app->security->generateRandomString();
    $token = Yii::$app->security->generateRandomString() . '_' . time();
    return "INSERT INTO {{%user}} ( 'id', `username`, `password`, `auth_key`, `token`) VALUES (1, 'user', '$password', '$auth_key', '$token')";
}
    public function down()
    {
        $this->dropTable('tables');
    }
}
