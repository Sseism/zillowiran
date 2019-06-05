<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "adminuser".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $name
 * @property string $nikname
 * @property int $status active1 deactiv2
 * @property int $permission_id
 * @property int $cteate_id
 */
class Adminuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adminuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'name', 'nikname', 'status', 'permission_id', 'cteate_id'], 'required'],
            [['status', 'permission_id', 'cteate_id'], 'integer'],
            [['username', 'password', 'email', 'name', 'nikname'], 'string', 'max' => 255],
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
            'name' => Yii::t('app', 'Name'),
            'nikname' => Yii::t('app', 'Nikname'),
            'status' => Yii::t('app', 'Status'),
            'permission_id' => Yii::t('app', 'Permission ID'),
            'cteate_id' => Yii::t('app', 'Cteate ID'),
        ];
    }
}
