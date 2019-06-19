<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="fixed-left">
<?php $this->beginBody() ?>

<div id="wrapper" class="wrap">
 <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="mdi mdi-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                        
                        <a href="index.html" class="logo"><img src="images/logo_dark.png" height="20" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    
                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-desktop-mac-dashboard"></i>
                                    <span> داشبورد </span>
                                </a>
                            </li>
                           
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-home"></i> <span> املاک </span><span class="badge badge-success badge-pill float-right">30</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="/zillow/admin/index.php?r=housing"><span class="badge badge-success badge-pill float-right">10</span>ملک های ثبت شده</a></li>
                                            <li><a href="/zillow/admin/index.php?r=housing"><span class="badge badge-success badge-pill float-right">15</span>رهن و اجاره</a></li>
                                            <li><a href="/zillow/admin/index.php?r=housing"><span class="badge badge-success badge-pill float-right">5</span>فروش</a></li>
                                            <li><a href="/zillow/admin/index.php?r=housing%2Fcreate">ثبت ملک</a></li>
                                        </ul>
                                   
                            </li>	
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-home"></i> <span> اقامتگاه </span><span class="badge badge-success badge-pill float-right">15</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="/zillow/admin/index.php?r=accommodation"><span class="badge badge-success badge-pill float-right">15</span>اقامتگاه های ثبت شده</a></li>
                                            <li><a href="/zillow/admin/index.php?r=accommodation%2Fcreate">ثبت اقامتگاه</a></li>
                                        </ul>
                                   
                            </li>	
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-home"></i> <span> تجربه ها </span><span class="badge badge-success badge-pill float-right">10</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="/zillow/admin/index.php?r=experiens"><span class="badge badge-success badge-pill float-right">10</span>تجربه های ثبت شده</a></li>
                                            <li><a href="/zillow/admin/index.php?r=experiens%2Fcreate">ثبت تجربه</a></li>
                                        </ul>
                                   
                            </li>	
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-user"></i> <span> کاربران </span><span class="badge badge-success badge-pill float-right">20</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-success badge-pill float-right">15</span>کاربران عمومی</a></li>
                                    <li><a href="#"><span class="badge badge-success badge-pill float-right">5</span>آژانس ها</a><li>
                                </ul>
                            </li>

                          
                            </li>  

			

									

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="mdi mdi-message-settings-variant"></i>
                                    <span> تنظیمات </span>
                                </a>
                            </li>	


                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
            <div class="content-page">
                <div class="content">
                          <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">
                                <a href="index.html" class="logo"><img src="images/logo.png" height="22" alt="logo"></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                             <!-- Search input -->
                             <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="جستجو" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                        <span class="badge badge-danger badge-pill noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>اعلانات (3)</h5>
                                        </div>

                                        <div class="slimscroll-noti">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>سفارش شما قرار داده شده است</b><span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>پیام جدید دریافت شد</b><span class="text-muted">شما 87 پیام خوانده نشده دارید</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                                <p class="notify-details"><b>مورد شما حمل می شود</b><span class="text-muted">این یک واقعیت طولانی است که خواننده خواهد بود</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>پیام جدید دریافت شد</b><span class="text-muted">شما 87 پیام خوانده نشده دارید</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>سفارش شما قرار داده شده است</b><span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span></p>
                                            </a>

                                        </div>
                                        

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            مشاهده همه
                                        </a>

                                    </div>
                                </li>
    

                                <li class="list-inline-item dropdown notification-list nav-user">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-1"> صدف خانبان <i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> پروفایل</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> کیف پول من</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> تنظیمات</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> قفل صفحه</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> خروج</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        ایجاد جدید ترین <i class="mdi mdi-plus"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">عملیات</a>
                                        <a class="dropdown-item" href="#">اقدام دیگری</a>
                                        <a class="dropdown-item" href="#">چیز های دیگر</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">پیوند جدا شده</a>
                                    </div>
                                </li>
                                <li class="list-inline-item notification-list d-none d-sm-inline-block">
                                    <a href="#" class="nav-link waves-effect">
                                        فعالیت
                                    </a>
                                </li>

                            </ul>

                        </nav>

                    </div>
                    <!-- Top Bar End -->
                                   <div class="page-content-wrapper ">
        <div class="container-fluid">
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
                </div>
    
    </div>
            </div>
 
            
    <footer class="footer">
                     © نام گستران 1398 <span class="d-none d-md-inline-block">  <i class="mdi mdi-heart text-danger"></i> Zillow Iran </span>
    </footer>
</div>
<!--
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
