<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\behaviors\AccessBehavior;

/**
 * Default controller for the `Admin` module
 */
class SiteController extends Controller
{
    public function behaviors() {
        return[
            AccessBehavior::className()
        ];
    }
    public function actionIndex()
    {
        return $this->render('index');
    }
}
