<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "favorit".
 *
 * @property int $id
 * @property int $userID
 * @property int $caseType
 * @property int $caseID
 */
class Favorit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'favorit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userID', 'caseType', 'caseID'], 'required'],
            [['userID', 'caseType', 'caseID'], 'integer'],
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
            'caseType' => Yii::t('app', 'Case Type'),
            'caseID' => Yii::t('app', 'Case ID'),
        ];
    }
}
