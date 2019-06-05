<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "experiens_time".
 *
 * @property int $id
 * @property int $exp_id
 * @property int $dateIN
 * @property int $dateOut
 * @property string $timeStart
 * @property string $timeEnd
 * @property int $price
 *
 * @property Experiens $exp
 */
class ExperiensTime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experiens_time';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exp_id', 'dateIN', 'dateOut', 'timeStart', 'timeEnd', 'price'], 'required'],
            [['exp_id', 'dateIN', 'dateOut', 'price'], 'integer'],
            [['timeStart'], 'string', 'max' => 255],
            [['timeEnd'], 'string', 'max' => 2555],
            [['exp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Experiens::className(), 'targetAttribute' => ['exp_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'exp_id' => Yii::t('app', 'Exp ID'),
            'dateIN' => Yii::t('app', 'Date In'),
            'dateOut' => Yii::t('app', 'Date Out'),
            'timeStart' => Yii::t('app', 'Time Start'),
            'timeEnd' => Yii::t('app', 'Time End'),
            'price' => Yii::t('app', 'Price'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExp()
    {
        return $this->hasOne(Experiens::className(), ['id' => 'exp_id']);
    }
}
