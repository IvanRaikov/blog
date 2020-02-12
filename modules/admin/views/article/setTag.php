<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = 'Установить теги: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Set tag';
?>
<div class="article-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php ActiveForm::begin();?>
        <?php echo Html::dropDownList('tags', $selectedTags,$tags,['multiple'=>true])?>
        <?php echo Html::submitButton('сохранить')?>
    <?php ActiveForm::end();?>

</div>
