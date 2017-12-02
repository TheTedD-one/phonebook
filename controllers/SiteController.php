<?php

namespace app\controllers;

use app\models\Person;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $query = Person::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy('last_name')
            ->with('phones')
            ->asArray()
            ->all();

        return $this->render('index', ['models' => $models, 'pages' => $pages]);
    }

    public function actionDetail($id)
    {
        $model = Person::findOne($id);
        $phones = $model->phones;

        return $this->render('detail', ['model' => $model, 'phones' => $phones]);
    }

    public function actionSearch() {
        $type = Yii::$app->request->get('type');
        $value = Yii::$app->request->get('value');

        if($type === '1') {
            $models = Person::find()->filterWhere(['like', 'last_name', $value])->orderBy('last_name')->with('phones')->asArray()->all();
        } else if($type === '2') {
            $models = Person::find()->filterWhere(['like', 'first_name', $value])->orderBy('last_name')->with('phones')->asArray()->all();
        } else {
            $this->redirect(['index']);
        }


        return $this->render('search', ['models' => $models]);
    }
}
