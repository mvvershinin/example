<?php

namespace app\models;

use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $city
 * @property string $photo
 *
 * @property Clientorder[] $clientorders
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
//    public $del_img;

    public static function tableName()
    {
        return 'client';
    }

    public static function primaryKey()
    {
        return array('id');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id', 'firstname', 'lastname', 'city'], 'required'],
            [['firstname', 'lastname', 'city'], 'required'],
            [['id'], 'integer'],
            [['firstname', 'lastname', 'city'], 'string', 'max' => 20],
            [['file'], 'file','extensions'=> ['jpg', 'jpeg', 'bmp', 'png']],
	    [['id'], 'unique']
//	    [['del_img'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'city' => 'Город',
            'photo' => 'Фото',
            'fullnamecity' => 'Клиент',
	    'namecity' => 'Город',
	    'countorders' => 'Количество заказов'
        ];
    }
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city']);
    }
    public function getFullnamecity()
    {
        return $this->lastname .' '.$this->firstname.' г.'.City::findOne($this->city)->name;
    }
    public function getNamecity()
    {
        return City::findOne($this->city)->name;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientorders()
    {
        return $this->hasMany(Clientorder::className(), ['cid' => 'id']);
    }
    public function getCountorders()
    {
	return Client::find()->joinWith('clientorders',true,'RIGHT JOIN')->where(['client.id'=>'clientorder.cid','client.id'=>$this->id])->count();
//        return Clientorder::findAll($this->)->name;
    }



}
