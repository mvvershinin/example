<?php

namespace app\models;
use yii\db\Query;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Client $id0
 * @property Client[] $clients
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Город',
	    'citycountorders' => 'Количество заказов' 
        ];
    }
    public function getCityname()
    {
	return $this->name;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['city' => 'id']);
    }

    public function getCitycountorders()
    {
	$sql = 'SELECT city.name FROM `city` RIGHT JOIN (SELECT client.id, client.city FROM `client` RIGHT JOIN `clientorder` ON `client`.`id` = `clientorder`.`cid` WHERE `client`.`city` = :id) AS t ON `city`.`id` = `t`.`city` WHERE `city`.`id` = :id';
	return  City::findBySql($sql, [':id' => $this->id])->count();

/* SELECT count(*) FROM `city` RIGHT JOIN (SELECT client.id, client.city FROM `client` RIGHT JOIN `clientorder` ON `client`.`id` = `clientorder`.`cid` WHERE `client`.`city` = 9) AS t ON `city`.`id` = `t`.`city` WHERE `city`.`id` = 9; */

    }


}
