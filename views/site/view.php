<?php 
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="row">
    <div class="col-md-9" style="min-height: 600px;">
        <h2><?= $article->title?></h2>
        <img style="width:500px" src="/web/images/<?=$article->image?>">
        <p><strong><?=Yii::$app->formatter->asDate($article->date)?></strong></p>
        <p><?= $article->content?></p>
    </div>
    <div class="col-md-3">
        <h3>Популярные</h3>
        <?php foreach($populars as $popular):?>
        <h4><a href="<?=Url::to(['site/view','id'=>$popular->id])?>"><?= $popular->title?></a></h2>
            <h4><?= $popular->description?></h3>
            <hr>
        <?php endforeach;?>
    </div>
    <div class="col-md-3">
        <h3>Последнее</h3>
        <?php foreach($recents as $recent):?>
        <h4><a href="<?=Url::to(['site/view','id'=>$recent->id])?>"><?= $recent->title?></a></h2>
            <h4><?= $recent->description?></h3>
            <hr>
        <?php endforeach;?>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <?php if(!empty($comments)):?>
        <h3>Коментарии</h3>
        <?php foreach($comments as $comment):?>
        <img src="/web/images/users/<?=$comment->user->photo?>" style="width:70px;">
        <h4><?= $comment->user->name?> <small><?= Yii::$app->formatter->asDate($comment->date)?></small></h3>
            <p><?=$comment->text?></p>
            <hr>
        <?php endforeach;?>
        <?php endif;?>
        <?php if(!Yii::$app->user->isGuest):?>
        <?php $form = ActiveForm::begin(['action'=>['/site/comment', 'id'=>$article->id]]);?>
        <?= $form->field($commentForm,'comment')->textarea()?>
        <?= Html::submitButton('написать')?>
        <?php ActiveForm::end();
        endif;
        ?>
         
    </div>
</div>