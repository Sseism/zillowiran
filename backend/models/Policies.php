<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "policies".
 *
 * @property int $id
 * @property string $title
 * @property int $del
 * @property string $lang زبان سطر
 *
 * @property AccPolicies[] $accPolicies
 */
class Policies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'policies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'del', 'lang'], 'required'],
            [['del'], 'integer'],
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
            'del' => Yii::t('app', 'Del'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccPolicies()
    {
        return $this->hasMany(AccPolicies::className(), ['policiesID' => 'id']);
    }
}
