<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <!-->

<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="description" content="<?php bloginfo('name');?> <?php bloginfo('description');?>. <?php the_field('col1', 58); ?>" />
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="theme-color" content="#2C3757">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="dc.language" CONTENT="US">
	<meta name="dc.source" CONTENT="http://elmcreekne.com/">
	<meta name="dc.title" CONTENT="<?php bloginfo('name');?> <?php bloginfo('description');?>">
	<meta name="dc.keywords" CONTENT="Elm Creek">
	<meta name="dc.subject" CONTENT="<?php bloginfo('name');?> <?php bloginfo('description');?>">
	<meta name="dc.description" CONTENT="<?php bloginfo('name');?> <?php the_field('col1', 58); ?>">
	<meta name="dc.creator" content="Ashley Cameron">
    <title><?php echo wp_title();?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon-192.png">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<!-- 	<div id="center" style="width: 1px; background: red;position: absolute;left: 50%;top:0;height: 100%;z-index: 10;"></div> -->

	<header id="header" role="banner">
		<div class="border"></div>
        <div id="mainnav" class="container-fluid">
           	<div class="row">
			    <nav class="navbar navbar-default" role="navigation">
			        <h2>Primary Navigation</h2>
			        <div class="navbar-header">
				        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				        </button>
			        </div>
			        <a class="navbar-brand col-sm-3 hidden-lg" href="<?php echo esc_url( home_url() ) ?>">
						<h1><?php bloginfo('name')?> <?php bloginfo('description');?></h1>
						<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Village-of-Elm-Creek-Logo.png" alt="Village of Elm Creek Logo">
					</a>
			        <div class="collapse navbar-collapse navbar-ex1-collapse row">
						<div id="location" class="hidden-xs hidden-sm col-sm-5 col-sm-offset-2 col-lg-4 col-lg-offset-1 top text-center">
							<h2>Located at</h2>
							<p class="geo">40º43'7'N / 99º22'31'W</p>
							<p>Central Nebraska along the <br/>Platte River Valley</p>
						</div>
						<div id="estb" class="hidden-xs hidden-sm col-sm-4 top text-center">
							<h2>Established</h2>
							<p>1866</p>
							<?php get_search_form(); ?>
						</div>
						<?php wp_nav_menu( array(
				            'menu' => 'main',
				            'depth' => 2,
				            'container' => false,
				            'menu_class' => 'nav navbar-nav col-sm-9 col-md-12',
				            'walker' => new wp_bootstrap_navwalker())
				            ); ?>
                    </div>
		        </nav>
            </div>
        </div>
	</header>