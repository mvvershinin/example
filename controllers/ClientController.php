<?php

namespace app\controllers;

use Yii;
use app\models\Client;
use app\models\City;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\imagine\Image;
use Imagine\Gd;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;
use yii\helpers\ArrayHelper;

/**
 * ClientController implements the CRUD actions for Client model.
 */
class ClientController extends Controller
{
	
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['client', 'logout', 'index', 'view', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['client', 'index', 'logout', 'view', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => [ 'index', 'logout'],
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Client models.
     * @return mixed
     */



    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Client::find(),
	    'pagination' => [
	        'pageSize' => 20,
	    ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionList()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Client::find(),
	    'pagination' => [
	        'pageSize' => 20,
	    ],
        ]);

        return $this->render('list', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCitylist()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Client::find()->orderBy('city'),
	    'pagination' => [
	        'pageSize' => 20,
	    ],
        ]);

        return $this->render('citylist', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionZeroorder()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Client::find()
			->joinWith('clientorders', true ,'LEFT OUTER JOIN')
			->where(['IS', 'clientorder.cid' , NULL]),
		    'pagination' => [
		    'pageSize' => 20,
	    ],
        ]);

        return $this->render('zeroorder', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Client model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
	    'city' => City::find()->all()
        ]);
    }

    /**
     * Creates a new Client model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Client();
	    if ($model->load(Yii::$app->request->post())) {
	            $file = UploadedFile::getInstance($model, 'file');
		    $this->saveclient($model, $file);
        } else {
            return $this->render('create', [
                'model' => $model,
    		'city' => City::find()->all()
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'file');
	    $this->saveclient($model, $file);
        } else {
            return $this->render('update', [
                'model' => $model,
    		'city' => City::find()->all()
            ]);
        }
    }
    public function Saveclient($model, $file)
    {
            if ($file && $file->tempName) {
                $model->file = $file;
                if ($model->validate(['file'])) {
                    $dir = Yii::getAlias('images/');
                    $fileName = md5($model->file->baseName. time()) . '.' . $model->file->extension;
                    $model->file->saveAs($dir . $fileName);
                    $model->file = $fileName; 
                    $photo = Image::getImagine()->open($dir . $fileName);
                    $photo->thumbnail(new Box(800, 800))->save($dir . $fileName, ['quality' => 90]);
                    $photo->thumbnail(new Box(200, 200))->save($dir .'thumbs/'. $fileName, ['quality' => 80]);
		    $model->photo = $fileName; 
                }
            } 
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }	
    }
    /**
     * Deletes an existing Client model.
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
     * Finds the Client model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Client the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Client::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}



