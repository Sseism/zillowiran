<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "proprtytype".
 *
 * @property int $id
 * @property string $title
 * @property string $lang زبان سطر
 *
 * @property Housing[] $housings
 */
class Proprtytype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proprtytype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'lang'], 'required'],
            [['title', 'lang'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousings()
    {
        return $this->hasMany(Housing::className(), ['property_type' => 'id']);
    }
}
