<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "housing".
 *
 * @property int $id
 * @property string $title
 * @property int $uselid
 * @property int $city_id
 * @property int $ad_type خرید0 رهن1
 * @property int $property_type نوع ملک
 * @property string $lat
 * @property string $long
 * @property int $area متراژ
 * @property int $price مبلغ فروش یا رهن
 * @property int $rent اجاره
 * @property int $contract_time مدت قرارداد
 * @property int $room_count تعداد اتاق
 * @property int $built_year سال ساخت
 * @property string $addres
 * @property string $description توضیحات
 * @property int $facilitie_in_home
 * @property int $tag ویژه1 اکازیون0
 * @property string $email
 * @property string $phone
 * @property int $date
 * @property int $modify_date
 * @property int $del
 * @property string $neibourhood اماکن عمومی
 * @property string $latLong
 * @property string $lang زبان سطر
 *
 * @property Facilitieinhousing[] $facilitieinhousings
 * @property City $city
 * @property Proprtytype $propertyType
 */
class Housing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'housing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'uselid', 'city_id', 'ad_type', 'property_type', 'lat', 'long', 'area', 'price', 'room_count', 'built_year', 'addres', 'description', 'facilitie_in_home', 'tag', 'email', 'phone', 'date', 'modify_date', 'del', 'neibourhood', 'latLong', 'lang'], 'required'],
            [['uselid', 'city_id', 'ad_type', 'property_type', 'area', 'price', 'rent', 'contract_time', 'room_count', 'built_year', 'facilitie_in_home', 'date', 'modify_date'.'status'], 'integer'],
            [['addres', 'description'], 'string'],
            [['title', 'lat', 'long', 'email', 'neibourhood', 'latLong', 'lang'], 'string', 'max' => 255],
            [['tag', 'del'], 'string', 'max' => 4],
            [['phone'], 'string', 'max' => 20],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'city_id']],
            [['property_type'], 'exist', 'skipOnError' => true, 'targetClass' => Proprtytype::className(), 'targetAttribute' => ['property_type' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'عنوان'),
            'uselid' => Yii::t('app', 'ثبت کننده'),
            'city_id' => Yii::t('app', 'شهر'),
            'ad_type' => Yii::t('app', 'نوع معامله'),
            'property_type' => Yii::t('app', 'نوع ملک'),
            'lat' => Yii::t('app', 'Lat'),
            'long' => Yii::t('app', 'Long'),
            'area' => Yii::t('app', 'متراژ'),
            'price' => Yii::t('app', 'قیمت'),
            'rent' => Yii::t('app', 'اجاره'),
            'contract_time' => Yii::t('app', 'مدت قرارداد'),
            'room_count' => Yii::t('app', 'تعداد اتاق ها'),
            'built_year' => Yii::t('app', 'سال ساخت'),
            'addres' => Yii::t('app', 'آدرس'),
            'description' => Yii::t('app', 'توضیحات'),
            'facilitie_in_home' => Yii::t('app', 'امکانات ملک'),
            'tag' => Yii::t('app', 'ویژه'),
            'email' => Yii::t('app', 'ایمیل'),
            'phone' => Yii::t('app', 'شماره تلفن'),
            'date' => Yii::t('app', 'تاریخ'),
            'modify_date' => Yii::t('app', 'تاریخ تغییر'),
            'del' => Yii::t('app', 'Del'),
            'neibourhood' => Yii::t('app', 'اماکن اطراف'),
            'latLong' => Yii::t('app', 'Lat Long'),
            'lang' => Yii::t('app', 'Lang'),
            'status' => Yii::t('app', 'وضعیت'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacilitieinhousings()
    {
        return $this->hasMany(Facilitieinhousing::className(), ['homeID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertyType()
    {
        return $this->hasOne(Proprtytype::className(), ['id' => 'property_type']);
    }
    /*****************************facilitie*****************************/
 public function getAllFacilitie($id='') {
           if($id==''){
        $all = \backend\models\Facilitie::find()->where(['owner'=>1])->all();
         }
         else
         {
             $all = \backend\models\Facilitie::find()->where(['owner'=>1,'faciliti_type'=>$id])->all();
         }

        return ArrayHelper::map($all, 'id', 'title');
    }

    public function getSelectedFaciliti() {
        $selected = [];
        if($this->isNewRecord!=1){
        $all = \backend\models\Facilitie::find()->all();
        $id=Yii::$app->request->get('id');
        $selected = ArrayHelper::getColumn(\backend\models\Facilitieinhousing::findAll(['homeID' =>$id ]), function ($element) {
                    return $element['facilitieID'];
                }
        );
        }
        return $selected;
    }
}
