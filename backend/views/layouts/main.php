<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
use backend\assets\AppAsset;
use yii\widgets\LinkPager;

AppAsset::register($this);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>">
    <?php $this->beginBody(); ?>
    <div class="container body">

        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/" class="site_title"> <span>Dashboard Admin</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile mb-3 pb-3" style="margin-left: 10px; ">
                        <!-- <div class="profile_pic">
                            <img src=" <?= Yii::$app->request->baseUrl ?>/img/profile_user.jpg " alt="" class="img-circle profile_img">
                        </div> -->
                        <div class="profile_info p-3" >
                            <span>Welcome,</span>
                            <h2 style="font-size: large;" ><b><?= Yii::$app->user->identity->username ?></b></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />
                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <br><br><br>
                            <h3 class="mt-3">General</h3>
                            <?=
                            \yiister\gentelella\widgets\Menu::widget(
                                [
                                    "items" => [
                                        ["label" => "Home", 'url' => ['/site/index'], "icon" => "home"],
                                        ["label" => "Data Pariwisata", "url" => ["tourism/index"], "icon" => "files-o"],
                                        ["label" => "Data Ekonomi Kreatif", "url" => ["ekraf/index"], "icon" => "files-o"],
                                        ["label" => "Data Kuliner", "url" => ["kuliner/index"], "icon" => "files-o"],
                                        ["label" => "Blog", "url" => ["post/index"], "icon" => "files-o"],



                                        // [
                                        //     "label" => "Widgets",
                                        //     "icon" => "th",
                                        //     "url" => "#",
                                        //     "items" => [
                                        //         ["label" => "Menu", "url" => ["site/menu"]],
                                        //         ["label" => "Panel", "url" => ["site/panel"]],
                                        //     ],
                                        // ],

                                    ],

                                ]
                            )
                            ?>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <!-- <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div> -->
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= Yii::$app->request->baseUrl ?>/img/profile_user.jpg" alt=""><?= Yii::$app->user->identity->username ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a>
                                    </li>
                                    <li>
                                        <?= Yii::$app->user->isGuest ? ('<a href="site/login"><i class="fa fa-sign-in pull-right"></i> Log Out</a>'

                                        ) : ('<a data-method="post" href=" ' . Url::to(['site/logout']) . ' "><i class="fa fa-sign-out pull-right"></i> Log Out (' . Yii::$app->user->identity->username . ')</a>'
                                        ) ?>

                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->








            <div class="right_col" role="main">
                <?php if (isset($this->params['h1'])) : ?>
                    <div class="page-title">
                        <div class="title_left">
                            <h1><?= $this->params['h1'] ?></h1>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="clearfix"></div>

                <?= $content ?>
                
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <!-- <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a><br />
                Extension for Yii framework 2 by <a href="http://yiister.ru" rel="nofollow" target="_blank">Yiister</a>
            </div>
            <div class="clearfix"></div>
        </footer> -->
            <!-- /footer content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    <!-- /footer content -->
    <?php $this->endBody(); ?>

    <!-- js -->
    <script src="https://cdn.tiny.cloud/1/ug6qiebx3dmdfulhhqcsw44sfeie1dj1oasnfd55ffzxd0ex/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/js/script.js"></script>

</body>

</html>
<?php $this->endPage(); ?>

