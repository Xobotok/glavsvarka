<?
use yii\widgets\Breadcrumbs;

$this->params['breadcrumbs'][] = [
    'template' => "<li>{link}</li>\n", //  шаблон для этой ссылки
    'label' => 'Товары', // название ссылки
    'url' => ['/product/all'] // сама ссылка
];
$this->params['breadcrumbs'][] = [
    'template' => "<li><b>{link}</b></li>\n", //  шаблон для этой ссылки
    'label' => 'Поиск', // название ссылки
    'url' => ['/product/search?q='.$_GET['q']] // сама ссылка
];
$this->params['breadcrumbs'];
echo Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], ]);
?>
<? if($products) {
    echo \yii\helpers\VarDumper::dumpAsString($products);
} else {
    echo "
<section class = 'search_section'>
<h3>По вашему запросу ничего не найдено</h3>
</section>

";
}

