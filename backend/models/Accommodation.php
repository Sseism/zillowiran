<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "accommodation".
 *
 * @property int $id
 * @property string $title
 * @property int $type خصوصی1 دربست2
 * @property int $acc_type_id نوع اقامتگاه(هتل، آپارتمان و ...)
 * @property int $acc_region_id نوع منطقه (ساحلی جنگلی و ...)
 * @property string $discription
 * @property int $quantity ظرفیت
 * @property int $max_quantity حداکثر ظرفیت
 * @property int $room_count تعداد اتاق
 * @property int $bed1 تعداد تخت 1 نفره
 * @property int $bed2 تعداد تخت 2 نفره
 * @property int $extrabed تعداد تخت و تشک اضافی
 * @property int $wc تعداد دستشویی
 * @property int $bathroom تعداد حمام
 * @property int $area_all مساحت کلی
 * @property int $area_building
 * @property int $state
 * @property int $city
 * @property int $address
 * @property string $lat
 * @property string $long
 * @property int $point
 * @property int $zipcode
 * @property int $phone
 * @property int $check_in
 * @property int $check_out
 * @property string $aac_policies قوانین اقامتگاه
 * @property int $cancell_policies قوانین کنسلی
 * @property int $min_res_night حداقل اقامت
 * @property int $price
 * @property string $latLong
 * @property string $lang زبان سطر
 * @property int $status دیده نشده 0 درانتظار1 تاییدشده2 ردشده3
 *
 * @property AccImage[] $accImages
 * @property AccPolicies[] $accPolicies
 * @property Accinfacilitie[] $accinfacilities
 * @property Accinroom[] $accinrooms
 * @property AccType $accType
 * @property AccRegion $accRegion
 * @property DayPrice[] $dayPrices
 */
class Accommodation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accommodation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'type', 'acc_type_id', 'acc_region_id', 'discription', 'quantity', 'max_quantity', 'room_count', 'bed1',
                'bed2', 'extrabed', 'wc', 'bathroom', 'area_all', 'area_building', 'state', 'city', 'address',
                'point', 'zipcode', 'phone', 'check_in', 'check_out',
                'min_res_night', 'price'], 'required'],
            [['type', 'acc_type_id', 'acc_region_id', 'quantity', 'max_quantity', 'room_count', 'bed1', 'bed2', 'extrabed', 'wc', 'bathroom', 'area_all', 'area_building', 'state', 'city', 'address', 'point', 'zipcode', 'phone', 'check_in', 'check_out', 'cancell_policies', 'min_res_night', 'price','status'], 'integer'],
            [['discription', 'aac_policies'], 'string'],
            [['title', 'lat', 'long', 'latLong', 'lang'], 'string', 'max' => 255],
            [['acc_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AccType::className(), 'targetAttribute' => ['acc_type_id' => 'id']],
            [['acc_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => AccRegion::className(), 'targetAttribute' => ['acc_region_id' => 'id']],
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
            'type' => Yii::t('app', 'نوع اقامتگاه'),
            'acc_type_id' => Yii::t('app', 'اقامتگاه'),
            'acc_region_id' => Yii::t('app', 'منطقه اقامتگاه'),
            'discription' => Yii::t('app', 'توضیحات'),
            'quantity' => Yii::t('app', 'ظرفیت'),
            'max_quantity' => Yii::t('app', 'حداکثر ظرفیت'),
            'room_count' => Yii::t('app', 'تعداد اتاق'),
            'bed1' => Yii::t('app', 'اتاق یک تخته'),
            'bed2' => Yii::t('app', 'اتاق دو تخته'),
            'extrabed' => Yii::t('app', 'تعداد تخت اضافه'),
            'wc' => Yii::t('app', 'تعداد سرویس بهداشتی'),
            'bathroom' => Yii::t('app', 'تعداد حمام'),
            'area_all' => Yii::t('app', 'زیربنا'),
            'area_building' => Yii::t('app', 'بنا'),
            'state' => Yii::t('app', 'استان'),
            'city' => Yii::t('app', 'شهر'),
            'address' => Yii::t('app', 'آدرس'),
            'lat' => Yii::t('app', 'Lat'),
            'long' => Yii::t('app', 'Long'),
            'point' => Yii::t('app', 'Point'),
            'zipcode' => Yii::t('app', 'کد پستی'),
            'phone' => Yii::t('app', 'تلفن'),
            'check_in' => Yii::t('app', 'ساعت ورود'),
            'check_out' => Yii::t('app', 'ساعت خروج'),
            'aac_policies' => Yii::t('app', 'قوانین کلی'),
            'cancell_policies' => Yii::t('app', 'قوانین کنسلی'),
            'min_res_night' => Yii::t('app', 'حداقل شب های رزرو'),
            'price' => Yii::t('app', 'قیمت'),
            'latLong' => Yii::t('app', 'Lat Long'),
            'lang' => Yii::t('app', 'Lang'),
            'status' => Yii::t('app', 'وضعیت'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccImages()
    {
        return $this->hasMany(AccImage::className(), ['acc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccPolicies()
    {
        return $this->hasMany(AccPolicies::className(), ['accID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccinfacilities()
    {
        return $this->hasMany(Accinfacilitie::className(), ['accID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccinrooms()
    {
        return $this->hasMany(Accinroom::className(), ['accID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccType()
    {
        return $this->hasOne(AccType::className(), ['id' => 'acc_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccRegion()
    {
        return $this->hasOne(AccRegion::className(), ['id' => 'acc_region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDayPrices()
    {
        return $this->hasMany(DayPrice::className(), ['accID' => 'id']);
    }
    
/*****************************facilitie*****************************/
 public function getAllFacilitie($id='') {
           if($id==''){
        $all = \backend\models\Facilitie::find()->where(['owner'=>2])->all();
         }
         else
         {
             $all = \backend\models\Facilitie::find()->where(['owner'=>2,'faciliti_type'=>$id])->all();
         }

        return ArrayHelper::map($all, 'id', 'title');
    }

    public function getSelectedFaciliti() {
        $selected = [];
        if($this->isNewRecord!=1){
        $all = \backend\models\Facilitie::find()->all();
        $id=Yii::$app->request->get('id');
        $selected = ArrayHelper::getColumn(\backend\models\Accinfacilities::findAll(['accID' =>$id ]), function ($element) {
                    return $element['facilitieID'];
                }
        );
        }
        return $selected;
    }
    public function getAllPolicies() {

        $all = \backend\models\policies::find()->all();


        return ArrayHelper::map($all, 'id', 'title');
    }

    public function getSelectedPolicies() {
        $selected = [];
        if($this->isNewRecord!=1){
        $all = \backend\models\policies::find()->all();
        $id=Yii::$app->request->get('id');
        $selected = ArrayHelper::getColumn(\backend\models\policies::findAll(['accID' =>$id ]), function ($element) {
                    return $element['facilitieID'];
                }
        );
        }
        return $selected;
    }    
}
