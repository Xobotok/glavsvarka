<?use yii\helpers\Url;?>
<div class="category__item col-lg-4 col-md-6 col-sm-12">
    <div class="category__item_block">
        <a href="<?= Url::to(['category/show', 'id' => $category['id']]) ?>">
    <img class = 'category__item_image' src="/img/category/<?= $category['id'] ?>/4x5.png" alt="">
        </a>
            <div class="category__item_title">
        <a href="<?= Url::to(['category/show', 'id' => $category['id']]) ?>">
            <h3><?=$category['name']?></h3>
        </a>
    </div>
    <div class="subcategory__title">
        <? foreach ($category['childs'] as $key => $item) {?>
            <a href="<?= Url::to(['category/show', 'id' => $key]) ?>">
                <h5><?=$item['name']?></h5>
            </a>
        <?}?>
    </div>
</div>
</div>