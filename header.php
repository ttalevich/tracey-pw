<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- Remy Sharp Shim -->
    <!-- [if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif -->    
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/favicon-16x16.png" sizes="16x16" />
<meta name="application-name" content="tracey.pw"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon/mstile-144x144.png" />
    <!-- call jquery for the toggle nav and image rollovers -->
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery/1.11.3/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,400|Roboto+Mono:400,500italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>		        
    <script src="<?php bloginfo('template_url');?>/script.js" type="text/javascript"></script>
    <?php /*?> Always have wp_head() inside the </head> tag 
       of your theme. Many plugins use this hook to add elements 
        to <head> such as styles, scripts, and meta tags.
      <?php */?>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
</head>
    
<body <?php body_class(); ?>>
    <div id="wrapper">
        <div class="relative">
            <div id="nav">
                    <div class="toggle">
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </div>
                <a href="<?php echo home_url(); ?>" class="logo">tracey.pw</a>
                <a href="<?php echo home_url(); ?>" class="minilogo">t.pw</a>
                    <?php /*
                        if ( function_exists( 'register_nav_menus' ) ) {
                            register_nav_menus(
                            array('main-menu' => 'Main Menu'));
                        } */ ?>
                <div class="desk-nav">
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'header-menu',
                            'menu' => 'Main Menu',
                            'container' => 'ul',
                            'container_class' => 'desk-nav'
                        )); 
                    ?>
                </div>   
                <div class="mob-nav">
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'header-menu',
                            'menu' => 'Main Menu',
                            'container' => 'ul',
                        )); 
                    ?>
                </div>
            </div>
                <?php get_sidebar('primary'); ?>
        </div>