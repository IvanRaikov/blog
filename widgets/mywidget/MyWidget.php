<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\widgets\mywidget;
/**
 * Description of MyWidget
 *
 * @author Lenovo
 */
class MyWidget extends \yii\base\Widget{
    public function run(){
        return $this->render('index');
    }
}
