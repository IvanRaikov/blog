<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'email')->textInput();?>
<?= $form->field($model, 'password')->textInput();?>
<?= Html::submitButton('войти');?>
<?php ActiveForm::end();?>

