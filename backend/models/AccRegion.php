<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "acc_region".
 *
 * @property int $id
 * @property string $title
 *
 * @property Accommodation[] $accommodations
 */
class AccRegion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acc_region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccommodations()
    {
        return $this->hasMany(Accommodation::className(), ['acc_region_id' => 'id']);
    }
}
