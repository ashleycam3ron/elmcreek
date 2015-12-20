<?php
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rel_canonical');
	remove_action('wp_head', 'print_emoji_detection_script', 7 );
	remove_action('wp_print_styles', 'print_emoji_styles' );

//!Add Theme Support
	if(!function_exists('initialize')){
		function initialize() {
			add_theme_support('post-thumbnails');
			add_theme_support('custom-background');
			add_theme_support('custom-header');
			add_theme_support('automatic-feed-links');
			add_theme_support( "title-tag" );
			//add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
		}
		add_action('init','initialize');
	}

function custom_login_logo(){
	$logo = get_stylesheet_directory_uri().'/images/Village-of-Elm-Creek-Logo.png';
	$images = get_stylesheet_directory_uri().'/images/';
	//$l = getimagesize($path);
	echo '<style type="text/css">
			#login {padding: 2% 0 0 !important;}
			h1 a { background-image:url("'. $logo .'") !important;background-size: contain !important;width: 150px !important; height: 200px !important;margin: 0 auto !important;}
			body.login {background:url("'. $images .'bg.png") !important;}
			.login form {background: #F7F4EB !important;border: 1px solid #D6DBEA !important;}
			.login #backtoblog a, .login #nav a, .login h1 a {color: #2C3757 !important;font-weight: bold !important;}
		</style>';
}
add_action('login_head','custom_login_logo');
function login_header_url() {
    return home_url();
}
add_filter('login_headerurl', 'login_header_url');

function login_header_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'login_header_title');

/*
function change_menu_labels($t) {
    global $menu;
	//pre($menu);exti;
    $menu[103][0] = 'Backup';
    foreach($menu as $k=>$v){
	    if($v[0]==''){

	    }
    }
}
add_action('admin_menu', 'change_menu_labels' ,1000);
*/