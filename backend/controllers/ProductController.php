<?php

namespace backend\controllers;

use Yii;
use backend\models\Category;
use backend\models\Product;
use backend\models\Factory;
use backend\models\search\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

//use yii\helpers\ArrayHelper;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Product();
        //lấy ra mảng của category
        $modelCat = new Category();
        $data = $modelCat->getCategoryParent();
        if (empty($data)) {
            $data = array();
        }
        //lấy ra mảng của factory
        $modelFac = new Factory();
        $dataFac= ArrayHelper:: map($modelFac->getAllFac(),'facId','facName');
        // echo "<pre>";
        // print_r($dataFac);
        // die();


        $time = time();
        $model->dateCreate = $time;

        if ($model->load(Yii::$app->request->post())) {
            $data = Yii::$app->request->post();
            $model->startSale = date("Y-m-d", strtotime($data["Product"]["startSale"])); // đổi về định dạng Y-m-d mới lưu đc vào trong db
            $model->endSale = date("Y-m-d", strtotime($data["Product"]["endSale"])) ; 
            // echo "<pre>";
            // print_r($data );
            // die();
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {

            
            return $this->redirect(['view', 'id' => $model->proId]);    
        }
        else {
            return $this->render('create', [
                'model' => $model,
                'data' => $data,
                'dataFac'=>$dataFac,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */

        

    public function actionUpdate($id) {

        $model = $this->findModel($id);
        $model->startSale = date("d-m-Y", strtotime($model["startSale"]));
        $model->endSale = date("d-m-Y", strtotime($model["endSale"]));

        $modelCat = new Category();

        $data = $modelCat->getCategoryParent();
        if (empty($data)) {
            $data = array();
        }

        $modelFac = new Factory();
        $dataFac= ArrayHelper:: map($modelFac->getAllFac(),'facId','facName');

        if ($model->load(Yii::$app->request->post())) {
            $data = Yii::$app->request->post();
            $model->startSale = date("Y-m-d", strtotime($data["Product"]["startSale"])); // đổi về định dạng d-m-y
            $model->endSale = date("Y-m-d", strtotime($data["Product"]["endSale"]));

            $model->save(false);
            return $this->redirect(['view', 'id' => $model->proId]);
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'data' => $data,
                        'dataFac'=>$dataFac,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
