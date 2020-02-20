<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use yii\base\Model;
use Yii;
/**
 * Description of ImageUpload
 *
 * @author Lenovo
 */
class ImageUpload extends Model{

    public $image;
    public function rules(){
        return [
            [['image'],'required'],
            [['image'],'file','extensions'=>'jpg,png,jpeg,gif']
        ];
    }
    public function uploadFile($file, $currentImage){
        if(is_file(Yii::getAlias('@app').'/web/images/'.$currentImage)){
            unlink(Yii::getAlias('@app').'/web/images/'.$currentImage);
        }
        $fileName = md5(uniqid().$file->name).$file->name;
        $file->saveAs(Yii::getAlias('@app').'/web/images/'.$fileName);
        return $fileName;
    }
}
