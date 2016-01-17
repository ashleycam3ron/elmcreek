<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2C3757">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="dc.language" CONTENT="US">
	<meta name="dc.source" CONTENT="<?php echo esc_url( home_url() ) ?>">
	<meta name="dc.title" CONTENT="<?php echo wp_title(); ?>">
	<meta name="dc.subject" CONTENT="<?php bloginfo('description');?>">
	<meta name="dc.keywords" CONTENT="Elm Creek">
	<meta name="dc.creator" content="Ashley Cameron">
	<title><?php echo wp_title();?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" />
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon-192.png">
    <link rel="image_src" href="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<h3 class="hidden"><?php bloginfo('name')?> <?php bloginfo('description');?></h3>
<!-- 	<div id="center" style="width: 1px; background: red;position: absolute;left: 50%;top:0;height: 100%;z-index: 10;"></div> -->

	<header id="header" role="banner">
		<div class="border"></div>
        <div id="mainnav" class="container-fluid">
           	<div class="row">
			    <nav class="navbar navbar-default" role="navigation">
			        <h2>Primary Navigation</h2>
			        <div class="navbar-header">
				        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar top-bar"></span>
				            <span class="icon-bar middle-bar"></span>
				            <span class="icon-bar bottom-bar"></span>
				        </button>
			        </div>
			        <a class="navbar-brand col-sm-3 hidden-lg" href="<?php echo esc_url( home_url() ) ?>">
						<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Village-of-Elm-Creek-Logo.png" alt="Village of Elm Creek Logo">
					</a>
			        <div id="navbar" class="navbar-collapse collapse navbar-ex1-collapse">
				        	<div id="location" class="hidden-xs hidden-sm col-sm-5 col-sm-offset-2 col-lg-4 col-lg-offset-1 top text-center">
							<p class="title">Located at</p>
							<p class="geo">40º43'7'N / 99º22'31'W</p>
							<p>Central Nebraska along the <br/>Platte River Valley</p>
						</div>
						<div id="estb" class="hidden-xs hidden-sm col-sm-4 top text-center">
							<p class="title">Established</p>
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