<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "exp_calender".
 *
 * @property int $id
 * @property string $date
 * @property string $price
 * @property int $vip
 * @property int $expID
 * @property int $Closed
 * @property int $reserve
 * @property int $userID
 *
 * @property Experiens $experiens
 */
class ExpCalender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exp_calender';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'price', 'vip', 'expID', 'Closed', 'reserve', 'userID'], 'required'],
            [['price', 'vip', 'expID', 'Closed', 'reserve', 'userID'], 'integer'],
            [['date'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'price' => 'Price',
            'vip' => 'Vip',
            'expID' => 'Exp ID',
            'Closed' => 'Closed',
            'reserve' => 'Reserve',
            'userID' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperiens()
    {
        return $this->hasOne(Experiens::className(), ['id' => 'expID']);
    }
}
