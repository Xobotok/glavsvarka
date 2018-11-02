<div class="item">
    <div class="testi_left">
        <i class="fa fa-quote-right" aria-hidden="true"></i>
        <p><?= $commentary['text']?></p>
        <a href="<?= Yii::$app->urlManager->createUrl(['/users/show', 'id' => $commentary['users']['id']])?>"><h4><?= $commentary['users']['name'] . " ". $commentary['users']['surname']?></h4></a>
    </div>
    <div class="testi_right">
        <img src="/img/testimonials/test-1.jpg" alt="">
    </div>
</div>