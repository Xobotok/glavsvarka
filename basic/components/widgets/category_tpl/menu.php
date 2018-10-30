<li class="category_menu">
    <a href="<?=Yii::$app->urlManager->createUrl(['category/show/', 'id' => $category['id']])?>">
        <?= $category['name']?>
    </a>
</li>