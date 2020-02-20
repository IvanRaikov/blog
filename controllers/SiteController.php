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
use app\models\CommentForm;

class SiteController extends Controller
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
        $query = Article::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount'=>$count, 'pageSize'=>1]);
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
        $article = Article::findOne(['id'=>$id]);
        $comments = $article->comments;
        $populars = Article::find()->orderBy('viewed desc')->limit(5)->all();
        $recents = Article::find()->orderBy('date asc')->limit(3)->all();
        $commentForm = new CommentForm();
        
        return $this->render('view',[
            'article'=>$article,
            'populars'=>$populars,
            'recents'=>$recents,
            'comments'=>$comments,
            'commentForm'=>$commentForm
        ]);
    }
    public function actionComment($id){
        $commentForm = new CommentForm();
        if(Yii::$app->request->isPost){
            if($commentForm->load(Yii::$app->request->post()) && $commentForm->save($id)){
                $this->redirect('/web/site/view?id='.$id);
            }
        }
    }
}
