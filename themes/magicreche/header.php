<!DOCTYPE html>
<!--[if IE 7]><html xmlns="http://www.w3.org/1999/xhtml" class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html xmlns="http://www.w3.org/1999/xhtml" class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title><?php 

    $page_layout = ot_get_option('page_layout', 'wide');
    if( $page_layout == 'wide' ) {
        $layout_class = 'layout-wide';
    } else {
        $layout_class = 'layout-boxed';
    }

    $header_height = ot_get_option('header_height', 90);

    $favicon = ot_get_option('favicon', '');
    $favicon_mobile = ot_get_option('favicon_mobile', '');
    $favicon_tablet = ot_get_option('favicon_tablet', '');

    if( !empty( $favicon ) ): ?>
    <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon"><?php
    endif;

    if( !empty( $favicon_mobile ) ): ?>
    <link rel="apple-touch-icon-precomposed" href="<?php echo $favicon_mobile; ?>"><?php
    endif;

    if( !empty( $favicon_tablet ) ): ?>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $favicon_tablet; ?>"><?php
    endif; ?>

    <style>
        .navbar-nav > li > a { line-height: <?php echo( $header_height ); ?>px !important; }
        body > header { margin-top: <?php echo( $header_height ); ?>px !important; }
        .single-events .tt_event_theme_page { margin-top: <?php echo( $header_height + 50 ); ?>px !important; }
    </style>

    <?php wp_head(); ?>

</head>
<body <?php body_class($layout_class); ?>>
<div class="navbar navbar-default navbar-fixed-top"><div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo ot_get_option('logo', get_template_directory_uri() . '/img/logo.gif'); ?>" alt="<?php bloginfo('name'); ?>"></a>
</div><?php

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if (is_plugin_active('sitepress-multilingual-cms/sitepress.php')) {
    icl_post_languages();
}

wp_nav_menu( array(
    'menu'              => 'header_nav',
    'theme_location'    => 'header_nav',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'navbar-collapse collapse',
    'menu_class'        => 'nav navbar-nav navbar-right',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker())
);
?></div></div>