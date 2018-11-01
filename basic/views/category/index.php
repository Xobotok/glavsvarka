<?php
/* @var $this yii\web\View */
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = [
    'template' => "<li><b>{link}</b></li>\n", //  шаблон для этой ссылки
    'label' => 'Категории', // название ссылки
    'url' => ['/category/all'] // сама ссылка
];
$this->params['breadcrumbs'];
echo Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], ]);
?>
<section class="category__section container_padding">
    <div class="main_w_title">
        <h2>Категории <br class="title_br" />товаров</h2>
        <h6>Ассортимент</h6>
    </div>
    <div class="category__block row">
<?= \app\components\widgets\CategoryWidget::widget(['tpl' => 'full'])?>
    </div>
</section>