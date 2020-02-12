<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Article;
use app\models\Category;
use yii\data\Pagination;

class CategoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $categories = Category::find()->all();
        
        $articles = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        $populars = Article::find()->orderBy('viewed desc')->limit(5)->all();
        $recents = Article::find()->orderBy('date asc')->limit(3)->all();
        return $this->render('index',[
            'articles'=>$articles,
            'categories'=>$categories,
            'pagination'=>$pagination,
            'populars'=>$populars,
            'recents'=>$recents
        ]);
    }

    public function actionView($id){
        $query = Article::find()->where(['category_id'=>$id]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount'=>$count, 'pageSize'=>1]);
        $articles = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        $populars = Article::find()->orderBy('viewed desc')->limit(5)->all();
        $recents = Article::find()->orderBy('date asc')->limit(3)->all();
        return $this->render('view',[
            'articles'=>$articles,
            'populars'=>$populars,
            'recents'=>$recents,
            'pagination'=>$pagination
        ]);
    }
}
