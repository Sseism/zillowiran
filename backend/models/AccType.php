<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "acc_type".
 *
 * @property int $id
 * @property int $title
 * @property int $type
 *
 * @property Accommodation[] $accommodations
 */
class AccType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acc_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'type'], 'required'],
            [['title', 'type'], 'integer'],
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
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccommodations()
    {
        return $this->hasMany(Accommodation::className(), ['acc_type_id' => 'id']);
    }
}
