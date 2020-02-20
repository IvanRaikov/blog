<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'zemlyanin';
?>
<div class="row">
    <div class="col-md-9">
        <?php foreach($articles as $article):?>
        <a href="<?=Url::to(['site/view','id'=>$article->id])?>"><h2><?= $article->title?></h2></a>
            <a href="<?=Url::to(['site/view','id'=>$article->id])?>"><img style="width:300px" src="/web/images/<?=$article->image?>"></a>
            <h3><?= $article->description?></h3>
            <p><?= $article->content?></p>
        <?php endforeach;?>
            <?php echo LinkPager::widget(['pagination'=>$pagination]);?>
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
