<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string $title
 * @property int $city_id
 * @property int $type country>1 city>0 street>2
 * @property string $lang زبان سطر
 *
 * @property Experiens[] $experiens
 * @property Housing[] $housings
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
            [['title', 'city_id', 'type', 'lang'], 'required'],
            [['city_id', 'type'], 'integer'],
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
            'city_id' => Yii::t('app', 'City ID'),
            'type' => Yii::t('app', 'Type'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperiens()
    {
        return $this->hasMany(Experiens::className(), ['city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousings()
    {
        return $this->hasMany(Housing::className(), ['city_id' => 'city_id']);
    }
}
