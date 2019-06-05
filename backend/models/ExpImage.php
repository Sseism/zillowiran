<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "exp_image".
 *
 * @property int $id
 * @property string $url
 * @property int $exp_id
 *
 * @property Experiens $exp
 */
class ExpImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exp_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'exp_id'], 'required'],
            [['exp_id'], 'integer'],
            [['url'], 'string', 'max' => 255],
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
            'url' => Yii::t('app', 'Url'),
            'exp_id' => Yii::t('app', 'Exp ID'),
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
