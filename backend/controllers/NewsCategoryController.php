<?php

namespace backend\controllers;

use backend\models\NewsCategory;
use backend\models\search\NewsCategorySearch;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * NewsCategoryController implements the CRUD actions for NewsCategory model.
 */
class NewsCategoryController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all NewsCategory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsCategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NewsCategory model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NewsCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new NewsCategory();
        $data = $model->getNewsCategory();
        $model->dateCreate = time();
//        $model->scenario = 'thucthi';

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if($model->save(false)){
                return $this->redirect(['view', 'id' => $model->newsCatId]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'data' => $data,
            ]);
        }
    }

    /**
     * Updates an existing NewsCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $data = $model->getNewsCategory();
        $model->updateAt = time();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->newsCatId]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'data' => $data,
            ]);
        }
    }

    /**
     * Deletes an existing NewsCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NewsCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NewsCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NewsCategory::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
