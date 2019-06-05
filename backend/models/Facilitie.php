<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "facilitie".
 *
 * @property int $id
 * @property string $title
 * @property string $icon
 * @property int $owner مسکن1 اقامتگاه2
 * @property int $faciliti_type مشترک1 کلی2
 * @property string $lang زبان سطر
 *
 * @property Accinfacilitie[] $accinfacilities
 * @property Facilitieinhousing[] $facilitieinhousings
 */
class Facilitie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facilitie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'icon', 'owner', 'faciliti_type', 'lang'], 'required'],
            [['owner', 'faciliti_type'], 'integer'],
            [['title', 'icon', 'lang'], 'string', 'max' => 255],
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
            'icon' => Yii::t('app', 'Icon'),
            'owner' => Yii::t('app', 'Owner'),
            'faciliti_type' => Yii::t('app', 'Faciliti Type'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccinfacilities()
    {
        return $this->hasMany(Accinfacilitie::className(), ['facilitieID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacilitieinhousings()
    {
        return $this->hasMany(Facilitieinhousing::className(), ['facilitieID' => 'id']);
    }
}
