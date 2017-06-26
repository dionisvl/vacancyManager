<?php

namespace app\controllers;

use Yii;
use app\models\CanToVacs;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CantovacsController implements the CRUD actions for CanToVacs model.
 */
class CantovacsController extends Controller
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
     * Lists all CanToVacs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => CanToVacs::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CanToVacs model.
     * @param integer $can_id
     * @param integer $vac_id
     * @return mixed
     */
    public function actionView($can_id, $vac_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($can_id, $vac_id),
        ]);
    }

    /**
     * Creates a new CanToVacs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CanToVacs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'can_id' => $model->can_id, 'vac_id' => $model->vac_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CanToVacs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $can_id
     * @param integer $vac_id
     * @return mixed
     */
    public function actionUpdate($can_id, $vac_id)
    {
        $model = $this->findModel($can_id, $vac_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'can_id' => $model->can_id, 'vac_id' => $model->vac_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CanToVacs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $can_id
     * @param integer $vac_id
     * @return mixed
     */
    public function actionDelete($can_id, $vac_id)
    {
        $this->findModel($can_id, $vac_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CanToVacs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $can_id
     * @param integer $vac_id
     * @return CanToVacs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($can_id, $vac_id)
    {
        if (($model = CanToVacs::findOne(['can_id' => $can_id, 'vac_id' => $vac_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
