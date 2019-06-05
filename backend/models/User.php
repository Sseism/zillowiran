<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username شماره موبایل
 * @property int $password
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $nationel_card
 * @property int $user_type مشاور1 معمولی0
 * @property int $status
 * @property string $profile_pic
 * @property int $created_at
 *
 * @property AgentInfo[] $agentInfos
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'firstname', 'lastname', 'nationel_card', 'user_type', 'status', 'profile_pic', 'created_at'], 'required'],
            [['password', 'user_type', 'status', 'created_at'], 'integer'],
            [['username', 'email', 'firstname', 'lastname', 'nationel_card', 'profile_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'nationel_card' => Yii::t('app', 'Nationel Card'),
            'user_type' => Yii::t('app', 'User Type'),
            'status' => Yii::t('app', 'Status'),
            'profile_pic' => Yii::t('app', 'Profile Pic'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgentInfos()
    {
        return $this->hasMany(AgentInfo::className(), ['userID' => 'id']);
    }
}
