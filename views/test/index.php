<?php 
use yii\widgets\ActiveForm;
use app\models\Article;
$model = new Article();

$form = ActiveForm::begin();
echo $form->field($model, 'title');
echo $form->field($model, 'category_id')->dropDownList([1,2,3]);
ActiveForm::end();
?>

