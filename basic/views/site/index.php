<?php

/* @var $this yii\web\View */

use app\components\CommentaryWidget;

$this->title = 'Главсварка';

?>
<section class="main_slider_area">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
        <ul>
            <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="/img/home-slider/slider-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <div class="text_box">
                    <h4 class="main_text1">Всё для сварки</h4>
                    <h2 class="main_text2">ГЛАВСВАРКА</h2>
                </div>
            </li>
            <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="/img/home-slider/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <div class="text_box">
                    <h4 class="main_text1">Низкие цены</h4>
                    <h2 class="main_text2">ГЛАВСВАРКА</h2>
                </div>
                <!-- LAYERS -->
            </li>
            <li data-index="rs-2974" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="/img/home-slider/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <div class="text_box">
                    <h4 class="main_text1">Напрямую от производителя</h4>
                    <h2 class="main_text2">ГЛАВСВАРКА</h2>
                </div>
                <!-- LAYERS -->
            </li>
        </ul>
    </div>
</section>
<!--================End Main Slider Area =================-->
<!--================Get Quote Area =================-->
<section class="get_quote_area">
    <div class="container">
        <div class="pull-left">
            <h4>Looking for a quality and affordable constructor for your next project?</h4>
        </div>
        <div class="pull-right">
            <a class="get_btn" href="#">GET A QUOTE</a>
        </div>
    </div>
</section>
<!--================End Get Quote Area =================-->
<!--================Our Team Area =================-->
<section class="our_team_area">
    <div class="container">
        <div class="main_b_r_title">
            <h2>Специальные <br class="title_br" />Предложения</h2>
            <h6>Самые выгодные покупки</h6>
        </div>
        <div class="team_slider owl-carousel">
                <?=\app\components\widgets\SpecialOffersWidget::widget()?>
        </div>
        <div class = 'special_offer_all'><a class="get_bg_btn" href="<?=Yii::$app->urlManager->createUrl(['sale/all'])?>">Посмотреть все</a></div>
    </div>
</section>
<!--================End Our Team Area =================-->
<!--================Category =================-->
<section class="our_service_area" id = "category">
    <div class="left_service">
        <div class="left_service_inner">
            <?= \app\components\widgets\CategoryWidget::widget(['tpl' => 'block'])?>
            </div>
        <div class="category_all_box">
        <a class="get_bg_btn" href="<?=Yii::$app->urlManager->createUrl(['/category/all'])?>">Посмотреть все</a>
        </div>
        </div>

    <div class="right_service">
        <div class="right_service_text">
            <div class="main_b_title">
                <h2>наши <br class="title_br" /> товары</h2>
                <h6>Всё Для Сварочных <br class="sub_br" /> Работ</h6>
            </div>
            <p>Компания Главсварка реализует весь спектр товаров для сварочных и других типовых работ.</p>
            <p>Наша продукция поступает напрямую от производителя, что является гарантией качества, низких цен и быстрой доставки во все регионы и населённые пункты России.</p>
            <p>В нашем розничном магазине выставлены новейшие образцы сварочных аппаратов, газопламенного оборудования, расходных материалов и многое другое. Наши специалисты всегда рады проконсультировать Вас по любым вопросам, касательно нашей продукции.</p>
            <div class="border_bar"></div>
        </div>
    </div>
</section>
<!--================End Our Service Area =================-->
<!--================Brands Area =================-->
<section class="brands_area">
    <div class="container">
        <div class="brand_slider owl-carousel">
            <div class="item">
                <img src="/img/clients/client-1.png" alt="">
            </div>
            <div class="item">
                <img src="/img/clients/client-2.png" alt="">
            </div>
            <div class="item">
                <img src="/img/clients/client-3.png" alt="">
            </div>
            <div class="item">
                <img src="/img/clients/client-4.png" alt="">
            </div>
            <div class="item">
                <img src="/img/clients/client-5.png" alt="">
            </div>
            <div class="item">
                <img src="/img/clients/client-6.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--================End Brands Area =================-->
<!--================Work Area =================-->
<section class="work_area">
    <div class="container">
        <div class="work_content">
            <div class="main_c_title">
                <h2>работайте <br class="title_br" />с нами</h2>
                <h6>Что мы предлагаем?</h6>
            </div>
            <p>Компания «ГЛАВСВАРКА» предлагает широкий ассортимент сварочных материалов и оборудования от производителей торговых марок СЗСМ, ESAB, КЕДР, СВАРОГ, NEON, ФОРСАЖ, РЕСАНТА, ГСЕ КРАСС, ДОНМЕТ и т. д.
                <br>Заводские цены, индивидуальный подход, широкий ассортимент и
                отличное качество!
                <br>
                <br>
                В нашем магазине вы получите консультацию специалиста, который подберёт для Вас оптимальное решение по сварочному оборудованию и материалам.
            </p>
            <a class="get_bg_btn" href="#">Связаться с нами</a>
        </div>
    </div>
</section>
<!--================End Work Area =================-->
<!--================Testimonials Area =================-->
<section class="testimonials_area">
    <div class="container">
        <div class="row testimonials_inner">
            <div class="col-md-4">
                <div class="main_w_title">
                    <h2>Отзывы <br class="title_br" />Клиентов</h2>
                    <h6>О Главсварке</h6>
                </div>
            </div>
            <div class="col-md-8">
                <div class="testimonials_slider owl-carousel">
                    <?= \app\components\widgets\CommentaryWidget::widget()?>
                    <div class="item">
                        <div class="testi_left">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <a href="#"><h4>Eng. Abul Kalam</h4></a>
                        </div>
                        <div class="testi_right">
                            <img src="/img/testimonials/test-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_left">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <a href="#"><h4>Eng. Abul Kalam</h4></a>
                        </div>
                        <div class="testi_right">
                            <img src="/img/testimonials/test-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Testimonials Area =================-->

<!--================Latest News Area =================-->
<section class="latest_news_area">
    <div class="container">
        <div class="main_c_b_title">
            <h2>Последние <br class="title_br" />новости</h2>
            <h6>Из мира сварки</h6>
        </div>
        <div class="row latest_news_inner">
        <?=\app\components\widgets\NewsWidget::widget()?>
        </div>
    </div>
</section>
<!--================End Latest News Area =================-->
<!--================Address Area =================-->
<section class="address_area">
    <div class="container">
        <div class="row address_inner">
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img src="/img/icon/place-icon.png" alt="">
                    </div>
                    <div class="media-body">
                        <h4>Адрес магазина :</h4>
                        <h5>г. Уфа, ул. Комсомольская, д. 24</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img src="/img/icon/phone-icon.png" alt="">
                    </div>
                    <div class="media-body">
                        <h5>+7 (347) 246-55-99</h5>
                        <h5>+7 (917) 456-59-15</h5>
                        <h5>+7 (987) 492-22-41</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="media-left">
                        <img src="/img/icon/inbox-icon.png" alt="">
                    </div>
                    <div class="media-body">
                        <h5>glavsvarka@mail.ru</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Address Area =================-->
