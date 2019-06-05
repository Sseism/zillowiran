<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "day_price".
 *
 * @property int $id
 * @property int $accID
 * @property int $date
 * @property int $price
 *
 * @property Accommodation $acc
 */
class DayPrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'day_price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accID', 'date', 'price'], 'required'],
            [['accID', 'date', 'price'], 'integer'],
            [['accID'], 'exist', 'skipOnError' => true, 'targetClass' => Accommodation::className(), 'targetAttribute' => ['accID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'accID' => Yii::t('app', 'Acc ID'),
            'date' => Yii::t('app', 'Date'),
            'price' => Yii::t('app', 'Price'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcc()
    {
        return $this->hasOne(Accommodation::className(), ['id' => 'accID']);
    }
}
