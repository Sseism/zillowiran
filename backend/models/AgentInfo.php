<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "agent_info".
 *
 * @property int $id
 * @property int $userID
 * @property int $city_id
 * @property string $neiberhood
 * @property string $street
 * @property string $address
 * @property string $website
 * @property string $phone
 * @property string $mobile
 * @property string $lang زبان سطر
 *
 * @property User $user
 */
class AgentInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agent_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userID', 'city_id', 'neiberhood', 'street', 'address', 'website', 'phone', 'mobile', 'lang'], 'required'],
            [['userID', 'city_id'], 'integer'],
            [['address'], 'string'],
            [['neiberhood', 'street', 'website', 'phone', 'mobile', 'lang'], 'string', 'max' => 255],
            [['userID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'userID' => Yii::t('app', 'User ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'neiberhood' => Yii::t('app', 'Neiberhood'),
            'street' => Yii::t('app', 'Street'),
            'address' => Yii::t('app', 'Address'),
            'website' => Yii::t('app', 'Website'),
            'phone' => Yii::t('app', 'Phone'),
            'mobile' => Yii::t('app', 'Mobile'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userID']);
    }
}
