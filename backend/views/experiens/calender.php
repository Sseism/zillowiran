<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = Yii::t('app', 'تقویم');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'تقویم'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>
<?=$this->registerCssFile("css/reserve.calendar.css");?>
<?=$this->registerCssFile("css/reserve.calendar.responsive.css");?>

<div class="hall-form">
    <div class="row">
        <div class="card">
            
            <div class="card-header">
            <strong><?= Html::encode($this->title) ?></strong>
            </div>
            <div class="card-block">
    <div class="col-md-6">
        <div class="ui-content">
            <div id="test"></div>
        </div>
    </div>
       <div class="col-md-6">


                                <div class="form-group col-sm-5">
                                    <label for="company">عنوان تجربه</label>
                                    <?= $model->title ?>
                                </div>
								
                                                             
                                    <div class="form-group col-sm-6">
                                        <label for="city">مبلغ: </label>
                                        <?= number_format($model->price)?>
                                    </div>

                                    
									
						
</div> 
    </div>


         
    </div>
  </div>
			
</div>


<?=$this->registerJs('  var cl=new ReserveCalendar("test",{
             editable:true,
            edit_url:"'.Url::to(['experiens/editcalender']) .'",
            data_url:"'.Url::to(['experiens/createcalender']) .'",
            query_params:{exp_id:'.$model->id.'},
            g_today:['.date(Y).','.date(n).','.date(j).'],
            def_price:'.$model->price.'
          

        });');
?>