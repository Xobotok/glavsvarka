<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="col-lg-6 product_item">
        <div class="news-item">
            <a href = "<?=Yii::$app->urlManager->createUrl(['category/'.$model->id])?>"><?= Html::encode($model->name) ?></a>
        </div>
   </div>

