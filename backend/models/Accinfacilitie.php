<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "accinfacilitie".
 *
 * @property int $id
 * @property int $accID
 * @property int $facilitieID
 * @property string $value
 *
 * @property Accommodation $acc
 * @property Facilitie $facilitie
 */
class Accinfacilitie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accinfacilitie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accID', 'facilitieID', 'value'], 'required'],
            [['accID', 'facilitieID'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['accID'], 'exist', 'skipOnError' => true, 'targetClass' => Accommodation::className(), 'targetAttribute' => ['accID' => 'id']],
            [['facilitieID'], 'exist', 'skipOnError' => true, 'targetClass' => Facilitie::className(), 'targetAttribute' => ['facilitieID' => 'id']],
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
            'facilitieID' => Yii::t('app', 'Facilitie ID'),
            'value' => Yii::t('app', 'Value'),
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
    public function getFacilitie()
    {
        return $this->hasOne(Facilitie::className(), ['id' => 'facilitieID']);
    }
}
