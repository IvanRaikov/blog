<?php
namespace app\modules\admin\behaviors;
use yii\base\Behavior;
use yii\base\Controller;
use Yii;

class AccessBehavior extends Behavior{
    
    public function events() {
        return [
            Controller::EVENT_BEFORE_ACTION=>'checkAccess'
        ];
    }
    public function checkAccess(){
        if(Yii::$app->user->isGuest || (Yii::$app->user->identity->isAdmin==0))
            Yii::$app->controller->redirect('/site/index');
    }
}


