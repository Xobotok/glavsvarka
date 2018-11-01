<div class="service_item">
    <div class="service_item_inner">
        <div class="service_icon">
            <img src="<?= $category['icon'] ?>.png" alt="">
            <img src="<?= $category['icon'] ?>_w.png" alt="">
        </div>
        <a href="<?= \yii\helpers\Url::to(['category/show', 'id' => $category['id']]) ?>">
            <h4><?= $category['name'] ?></h4>
        </a>
        <a class="view_btn" href="<?= \yii\helpers\Url::to(['category/show', 'id' => $category['id']]) ?>">Перейти в
            каталог</a>
    </div>
</div>