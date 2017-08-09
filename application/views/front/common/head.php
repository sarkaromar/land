<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Real Estate - Responsive HTML5 Template </title>
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href=<?=base_url()?>assets/images/fav-icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href=<?=base_url()?>assets/images/fav-icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href=<?=base_url()?>assets/images/fav-icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href=<?=base_url()?>assets/images/fav-icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>assets/images/fav-icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url()?>assets/images/fav-icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url()?>assets/images/fav-icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url()?>assets/images/fav-icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/images/fav-icon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?=base_url()?>assets/images/fav-icon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/images/fav-icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url()?>assets/images/fav-icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/fav-icon/favicon-16x16.png">
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom/style.css">
        <!-- color css -->
        <link rel="stylesheet" id="jssDefault" href="<?=base_url()?>assets/css/custom/theme-default.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive/responsive.css">

        
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom/custom.css">
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body class="home">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="boxed_wrapper">
        <!-- top header -->
        <div id="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 top_header_left">
                        <a class="mail"><i class="fa fa-envelope-o"></i> <?=$this->settings->info->mail1?></a>
                    </div> <!-- End .top_header_left -->
                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 top_header_right">
                        <ul class="icon_header">
                            <li class="border_round tran3s tooltip" title="Facebook"><a href="<?=$this->settings->info->fb?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="border_round tran3s tooltip" title="Twitter"><a href="<?=$this->settings->info->twt?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="border_round tran3s tooltip" title="Google Plus"><a href="<?=$this->settings->info->g_plus?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li class="border_round tran3s tooltip" title="Linkedin"><a href="<?=$this->settings->info->link?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul> <!-- End .icon_header -->
                    </div> <!-- End .top_header_right -->
                    <div class="clear_fix"></div>
                </div> <!-- End .row -->
            </div> <!-- End .container -->
        </div> <!-- End .top_header -->
        <!-- end top header -->
        <!-- main menu -->
        <div class="main_menu fixed_menu" id="menu">
            <div class="container">
                <div class="wrapper">
                    <div class="logo_holder">
                        <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/skin/logo.png" alt="Logo" id="logo" class="img-responsive"></a>
                    </div> <!-- End .logo_holder -->
                    <a href="<?=site_url('add_property')?>" class="amenities tran3s">Add Property</a>
                    <!-- menu -->
                    <nav class="navbar navbar-default">
                       <!-- Brand and toggle get grouped for better mobile display -->
                       <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                         </button>
                       </div> <!-- End .navbar-header -->
                       <!-- Collect the nav links, forms, and other content for toggling -->
                       <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="tran3sL <?php if (isset($menu) && ($menu == 'home')) echo 'active'?>"><a href="<?=base_url()?>">Home</a></li>
                            <li class="tran3sL <?php if (isset($menu) && ($menu == 'about')) echo 'active'?>"><a href="<?=base_url('about_us')?>">About Us</a></li>
                            <li class="tran3sL <?php if (isset($menu) && ($menu == 'sale')) echo 'active'?>"><a href="<?=site_url('land_for_sale/all')?>">Land For Sale</a></li>
                            <li class="tran3sL <?php if (isset($menu) && ($menu == 'dev')) echo 'active'?>"><a href="<?=site_url('land_for_development/all')?>">Land For Dev.</a></li>
                            <li class="tran3sL <?php if (isset($menu) && ($menu == 'agro')) echo 'active'?>"><a href="<?=site_url('land_for_agro/all')?>">Land For Agro</a></li>
                            <li class="tran3sL <?php if (isset($menu) && ($menu == 'indus')) echo 'active'?>"><a href="<?=site_url('land_for_industries/all')?>">Land For Industries</a></li>
                            <li class="tran3sL <?php if (isset($menu) && ($menu == 'faq')) echo 'active'?>"><a href="<?=site_url('faqs')?>">Faq's</a></li>
                        </ul>
                       </div><!-- /.navbar-collapse -->
                    </nav> <!-- End .navbar -->
                <!-- end menu -->
                </div>  <!-- End .wrapper -->
            </div> <!-- End .container -->
        </div> <!-- End .main_menu -->
        <!-- end main menu -->
        <!-- call us anytime -->
        <div class="container">
            <div class="call_us">
                <p><span><i class="fa fa-phone"></i></span>Call Us Anytime [at]</p>
                <a href="#"><?=$this->settings->info->hot_phn?></a>
            </div>
        </div>
        <!-- End Call Us Anytime -->