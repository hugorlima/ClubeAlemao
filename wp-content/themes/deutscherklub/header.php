<?php require_once 'Mobile_Detect.php'; $detect = new Mobile_Detect; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta property="og:locale" content="pt_BR">
        <meta property="og:url" content="">
        <meta property="og:title" content="">
        <meta property="og:site_name" content="">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
        <meta property="og:image" content="">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="fb:app_id" content="ID" /> 
        <link rel="canonical" href="" />
        <title><?php wp_title( '|', true, 'right' ); echo get_bloginfo('description'); ?></title>
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/vendor/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <?php wp_enqueue_script('jquery'); ?>
        <?php wp_head();?>
    </head>
    <body class="<?php if(!(is_home() || is_front_page())): echo 'internal'; else: endif; if(is_page('painel-do-usuario')): echo ' dashboard'; else: endif; ?>">
        <header>
            <div class="container">
                <div class="row">
                    <h1 class="logo"><a href="<?php bloginfo('url') ?>" alt="Logo Clube Alemão | Deutscher Klub" title="Logo Clube Alemão | Deutscher Klub"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo.png" alt="Logo Clube Alemão | Deutscher Klub" title="Logo Clube Alemão | Deutscher Klub"></a></h1>
                    <div class="wrap-menu">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-8">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'  => 'menu-principal',
                                        'container' => ''
                                    )
                                );
                            ?>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                            <div class="login">
                                <i class="fas fa-star"></i>
                                <a href="#">Login</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="wrap-show_menu">
                        <a href="javascript:void(0);" class="show_menu"><i class="fas fa-bars"></i></a>
                    </div>
                    <a href="javascript:void(0);" class="hide_menu"><i class="fas fa-times"></i></a>
                </div>
            </div>
        </header>