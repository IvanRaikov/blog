<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\assets\AdminAsset;

AdminAsset::register($this);
$this->registerJsFile('@web/ckeditor/ckeditor-init.js',['depends'=>[
AdminAsset::className()
]]);
/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['id'=>'editor1']) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'viewed')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([1=>'отображается',0=>'скрыт']) ?>

    <?= $form->field($model, 'category_id')->dropDownList($categories) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
