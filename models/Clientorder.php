<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientorder".
 *
 * @property integer $id
 * @property integer $cid
 * @property string $orderdata
 *
 * @property Client $c
 */
class Clientorder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientorder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cid', 'orderdata'], 'required'],
            [['id', 'cid'], 'integer'],
            [['orderdata'], 'string'],
            [['id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => 'Клиент',
            'orderdata' => 'Заказ',
	    'clientfullname' => 'Клиент',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'cid']);
    }
    public function getClientfullname()
    {
	return $this->client->fullnamecity;
    }

}
