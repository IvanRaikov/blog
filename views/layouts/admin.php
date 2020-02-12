<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\AdminAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="nav navbar-default">
        <ul class="nav navbar-nav">
            <li><a href="<?=Url::to(['/site/index'])?>" class="navbar-brand">Zemlyanin</a></li>
            <li><a href="<?=Url::to(['/admin/article'])?>">Статьи</a></li>
            <li><a href="<?=Url::to(['/admin/category'])?>">Категории</a></li>
            <li><a href="<?=Url::to(['/admin/tag'])?>">Теги </a></li>
            <li><a href="<?=Url::to(['/admin/site/index'])?>">Выйти (<?= Yii::$app->user->identity->name?>)</a></li>
        </ul>
    </div>  
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
