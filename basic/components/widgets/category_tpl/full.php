

<div class="service_item">
    <div class="service_item_inner">
        <div class="service_icon">
            <img src="<?= $category['icon'] ?>.png" alt="">
            <img src="<?= $category['icon'] ?>_w.png" alt="">
        </div>
        <a href="<?= \yii\helpers\Url::to(['category/'.$category['id']]) ?>">
            <h4><?= $category['name'] ?></h4>
        </a>
        <?foreach ($category['childs'] as $child) {
            echo "<a href = ".\yii\helpers\Url::to(['category/'.$child['id']])."> 
    <p>$child[name]</p>
</a>";
        }?>
        <h4><?= $category['childs'][7]['name'] ?></h4>
        <a class="view_btn" href="<?= \yii\helpers\Url::to(['category/'.$category['id']]) ?>">Перейти в
            каталог</a>
    </div>
</div>