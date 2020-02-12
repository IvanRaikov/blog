<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\LoginForm;
use app\models\SignupForm;

class UserController extends Controller
{
    public function actionLogin(){
        if(!Yii::$app->user->isGuest){
            return $this->goHome();
        }
        $model = new LoginForm();
        if($model->load(Yii::$app->request->post()) && $model->login()){
            return $this->goBack();
        }
        return $this->render('login',[
            'model'=>$model
        ]);
    }
    public function actionLogout(){
        Yii::$app->user->logOut();
        return $this->goHome();
    }
    public function actionSignup(){
        $model = new SignupForm();
        if(Yii::$app->request->isPost){
            if($model->load(Yii::$app->request->post()) && $model->signUp()){
                $login = new LoginForm();
                $login->attributes = $model->attributes;
                $login->login();
                $this->goHome();
            }
        }
        return $this->render('signup',[
            'model'=>$model
        ]);
    }
    
}
