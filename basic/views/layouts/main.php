<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\LtAppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
LtAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--================Header Area =================-->
<header class="main_header_area">
    <div class="header_top_area">
        <div class="container">
            <div class="pull-left">
                <p><i class="fa fa-phone"></i>+7 (347) 246-55-99 </p>
                <p><i class="fa fa-map-marker"></i>г. Уфа, ул. Комсомольская, д. 24</p>
                <p><i class="mdi mdi-clock"></i>08 AM - 10 PM</p>
            </div>
            <div class="pull-right">
                <ul class="header_social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu">
                            <a href="/">Главная</a>
                        </li>
                        <li class="dropdown submenu">
                            <a href="/category/">Товары</a>
                            <ul class="dropdown-menu">
                                <?= \app\components\CategoryWidget::widget(['tpl' => 'menu'])?>
                            </ul>
                        </li>
                        <li><a href="/about/">О компании</a></li>
                        <li><a href="/contact/">Контакты</a></li>
                        <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</header>
<?= $content?>
<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets_area">
        <div class="container">
            <div class="row footer_widgets_inner">
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget about_widget">
                        <img src="img/footer-logo.png" alt="">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium. ed quia consequuntur magni dolores eos qui ratione.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget recent_widget">
                        <div class="f_w_title">
                            <h3>Recent Posts</h3>
                        </div>
                        <div class="recent_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/blog/recent-post/recent-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><p>The road to success is always under con-struction</p></a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/blog/recent-post/recent-2.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><p>The road to success is always under con-struction</p></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget address_widget">
                        <div class="f_w_title">
                            <h3>Office Address</h3>
                        </div>
                        <div class="address_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <p>1234 Cafficic, California, USA</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p>(012) 3456789 </p>
                                    <p>(012) 3456789 </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <p>info@domain.com</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget give_us_widget">
                        <h5>Give Us A Call</h5>
                        <h4>(012) 3456789</h4>
                        <h5>or</h5>
                        <a class="get_bg_btn" href="#">GET A QUOTE</a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copy_right">
        <div class="container">
            <h4><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h4>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
