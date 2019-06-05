<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "acc_policies".
 *
 * @property int $id
 * @property int $accID
 * @property int $policiesID
 *
 * @property Accommodation $acc
 * @property Policies $policies
 */
class AccPolicies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acc_policies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accID', 'policiesID'], 'required'],
            [['accID', 'policiesID'], 'integer'],
            [['accID'], 'exist', 'skipOnError' => true, 'targetClass' => Accommodation::className(), 'targetAttribute' => ['accID' => 'id']],
            [['policiesID'], 'exist', 'skipOnError' => true, 'targetClass' => Policies::className(), 'targetAttribute' => ['policiesID' => 'id']],
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
            'policiesID' => Yii::t('app', 'Policies ID'),
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
    public function getPolicies()
    {
        return $this->hasOne(Policies::className(), ['id' => 'policiesID']);
    }
}
