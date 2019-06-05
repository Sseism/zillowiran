<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property int $id
 * @property string $title
 * @property int $quantity
 * @property int $breakfast
 * @property int $lunch
 * @property int $dinner
 * @property int $price
 * @property int $off
 * @property string $lang زبان سطر
 *
 * @property Accinroom[] $accinrooms
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'quantity', 'breakfast', 'lunch', 'dinner', 'price', 'off', 'lang'], 'required'],
            [['quantity', 'breakfast', 'lunch', 'dinner', 'price', 'off'], 'integer'],
            [['title', 'lang'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'quantity' => Yii::t('app', 'Quantity'),
            'breakfast' => Yii::t('app', 'Breakfast'),
            'lunch' => Yii::t('app', 'Lunch'),
            'dinner' => Yii::t('app', 'Dinner'),
            'price' => Yii::t('app', 'Price'),
            'off' => Yii::t('app', 'Off'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccinrooms()
    {
        return $this->hasMany(Accinroom::className(), ['roomID' => 'id']);
    }
}
