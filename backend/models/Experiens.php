<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "experiens".
 *
 * @property int $id
 * @property string $title
 * @property int $exp_type_id نوع تجربه
 * @property int $exp_sub_type_id
 * @property int $city_id
 * @property string $description اطلاعات بیشتر
 * @property string $facilitie امکانات میزبان
 * @property string $we_do چه خواهیم کرد
 * @property string $time مدت تجربه
 * @property string $materiel تجهیزات لازم
 * @property string $about_host درباره میزبان
 * @property int $price
 * @property string $lang زبان سطر
 *
 * @property ExpImage[] $expImages
 * @property City $city
 * @property ExpType $expType
 * @property ExperiensTime[] $experiensTimes
 */
class Experiens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experiens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'exp_type_id', 'exp_sub_type_id', 'city_id', 'description', 'facilitie', 'we_do', 'time', 'materiel', 'about_host', 'price', 'lang'], 'required'],
            [['exp_type_id', 'exp_sub_type_id', 'city_id', 'price'], 'integer'],
            [['description', 'facilitie', 'we_do', 'materiel', 'about_host'], 'string'],
            [['title', 'time', 'lang'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['exp_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ExpType::className(), 'targetAttribute' => ['exp_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'exp_type_id' => Yii::t('app', 'Exp Type ID'),
            'exp_sub_type_id' => Yii::t('app', 'Exp Sub Type ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'description' => Yii::t('app', 'Description'),
            'facilitie' => Yii::t('app', 'Facilitie'),
            'we_do' => Yii::t('app', 'We Do'),
            'time' => Yii::t('app', 'Time'),
            'materiel' => Yii::t('app', 'Materiel'),
            'about_host' => Yii::t('app', 'About Host'),
            'price' => Yii::t('app', 'Price'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExpImages()
    {
        return $this->hasMany(ExpImage::className(), ['exp_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExpType()
    {
        return $this->hasOne(ExpType::className(), ['id' => 'exp_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperiensTimes()
    {
        return $this->hasMany(ExperiensTime::className(), ['exp_id' => 'id']);
    }
}
