<?php
add_action( 'widgets_init', 'elmcreek_widgets_init' );
function elmcreek_widgets_init() {
    register_sidebar(array(
		'name'          => __( 'Upcoming Events', 'elmcreek' ),
		'id'            => 'events-widgets',
		'description'   => '',
	        'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
	register_sidebar(array(
		'name'          => __( 'Calendar Events', 'elmcreek' ),
		'id'            => 'calendar',
		'description'   => '',
	        'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
}