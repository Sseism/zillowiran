<?php

namespace backend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

use backend\models\Experiens;
use backend\models\ExpCalender;
use backend\models\City;
use backend\models\ExpType;
/**
 * ExperiensController implements the CRUD actions for Experiens model.
 */
class ExperiensController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Experiens models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Experiens::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Experiens model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Experiens model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Experiens();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        $model->city_id=ArrayHelper::map(City::find()->all(),'id','title');
        $model->exp_type_id=ArrayHelper::map(ExpType::find()->all(),'id','title');
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Experiens model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Experiens model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Experiens model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Experiens the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Experiens::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
// ///////////////////////////////   Calender
    
      public function actionCalender($id)
    {
        
         $model = $this->findModel($id);
        return $this->render('calender', [
            'model' => $model,
        ]);

    }
    public function actionCreatecalender()
    {
       
         
        $hallID=$_POST['exp_id'];
        $year=$_POST['year'];
        $month=$_POST['month'];
        $Date=$year."-".sprintf('%02d',$month);

      
        $calendar=new ExpCalender();
     
        
         $days=$calendar->find()->select(['id AS date_id', 'reserve AS reserved','vip AS discounted','price','Closed AS holiday','RIGHT(date,2) AS day_number'])->where('hallID=:hallID',['hallID'=>$hallID])->andWhere('date LIKE :date', array(':date' => '%'.$Date.'%'))->asArray()->all();       
        

        return json_encode($days);

    
    }
    
          public function actionEditcalender()
    {
        

        $calendar=new ExpCalender();
        $hall_id=$_POST['exp_id'];
        $date_id=$_POST['date_id'];
        $year=$_POST['year'];
        $month=$_POST['month'];
        $day=$_POST['day'];
        $price=$_POST['price'];
        $discounted=$_POST['discounted'];
        $reserved=$_POST['reserved'];
        $holiday=$_POST['holiday']; 
        $date=$year.'-'.sprintf('%02d',$month).'-'.sprintf('%02d',$day);
        if($date_id!=null){
        $model =ExpCalender::findOne($date_id); 
        }
        else
        {
            $model=new ExpCalender();
        }
        //print_r($model);
        $model->date=$date;
        $model->price=$price;
        $model->vip=$discounted;
        $model->reserve=$reserved;
        $model->Closed=$holiday;
        $model->expID=$exp_id;
        
        if($model->save()){
        return  json_encode(array('ok'));
       }else{
          return null;
       }
    }
    
    
    
}
