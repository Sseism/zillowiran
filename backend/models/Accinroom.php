<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "accinroom".
 *
 * @property int $id
 * @property int $roomID
 * @property int $accID
 *
 * @property Accommodation $acc
 * @property Rooms $room
 */
class Accinroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accinroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roomID', 'accID'], 'required'],
            [['roomID', 'accID'], 'integer'],
            [['accID'], 'exist', 'skipOnError' => true, 'targetClass' => Accommodation::className(), 'targetAttribute' => ['accID' => 'id']],
            [['roomID'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['roomID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'roomID' => Yii::t('app', 'Room ID'),
            'accID' => Yii::t('app', 'Acc ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcc()
    {
        return $this->hasOne(Accommodation::className(), ['id' => 'accID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'roomID']);
    }
}
