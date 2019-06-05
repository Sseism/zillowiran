<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "exp_type".
 *
 * @property string $title
 * @property int $id
 * @property string $lang زبان سطر
 *
 * @property Experiens[] $experiens
 */
class ExpType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exp_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'lang'], 'required'],
            [['title', 'lang'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => Yii::t('app', 'Title'),
            'id' => Yii::t('app', 'ID'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperiens()
    {
        return $this->hasMany(Experiens::className(), ['exp_type_id' => 'id']);
    }
}
