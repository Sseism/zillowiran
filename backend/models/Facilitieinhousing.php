<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "facilitieinhousing".
 *
 * @property int $id
 * @property int $homeID
 * @property int $facilitieID
 * @property string $value تعداد/مقدار امکانات
 *
 * @property Housing $home
 * @property Facilitie $facilitie
 */
class Facilitieinhousing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facilitieinhousing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['homeID', 'facilitieID', 'value'], 'required'],
            [['homeID', 'facilitieID'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['homeID'], 'exist', 'skipOnError' => true, 'targetClass' => Housing::className(), 'targetAttribute' => ['homeID' => 'id']],
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
            'homeID' => Yii::t('app', 'Home ID'),
            'facilitieID' => Yii::t('app', 'Facilitie ID'),
            'value' => Yii::t('app', 'Value'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHome()
    {
        return $this->hasOne(Housing::className(), ['id' => 'homeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacilitie()
    {
        return $this->hasOne(Facilitie::className(), ['id' => 'facilitieID']);
    }
}
