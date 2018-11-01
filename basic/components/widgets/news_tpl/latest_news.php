<div class="col-md-4 col-sm-6">
    <div class="latest_news_item">
        <div class="news_image">
            <img src="/img/news/<?=$news['id']?>/main.jpg" alt="">
            <div class="l_date">
                <h5><?=$news['date']?></h5>
            </div>
        </div>
        <div class="news_content">
            <a href="#"><h4><?=$news['title']?></h4></a>
            <h6>Опубликовал <a href="<?=Yii::$app->urlManager->createUrl(['users/show/', 'id' => $news['users']['id']])?>">
                    <?=$news['users']['name'] . ' '. $news['users']['surname']?></a></h6>
            <h6><?=date("d.m.y H:i",strtotime($news['date_time']))?> </h6>
            <p><?= $news['text']?></p>
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a href="<?=Yii::$app->urlManager->createUrl(['users/show/', 'id' => $news['users']['id']])?>">Подробнее <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>