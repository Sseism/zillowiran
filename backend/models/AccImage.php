<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "acc_image".
 *
 * @property int $id
 * @property string $url
 * @property int $width
 * @property int $height
 * @property int $acc_id
 *
 * @property Accommodation $acc
 */
class AccImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acc_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'width', 'height', 'acc_id'], 'required'],
            [['width', 'height', 'acc_id'], 'integer'],
            [['url'], 'string', 'max' => 255],
            [['acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Accommodation::className(), 'targetAttribute' => ['acc_id' => 'id']],
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
            'width' => Yii::t('app', 'Width'),
            'height' => Yii::t('app', 'Height'),
            'acc_id' => Yii::t('app', 'Acc ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcc()
    {
        return $this->hasOne(Accommodation::className(), ['id' => 'acc_id']);
    }
}
