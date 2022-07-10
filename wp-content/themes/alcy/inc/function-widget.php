<?php

add_action( 'widgets_init', function () {

	$before_widget = '<div id="%1$s" class="widget %2$s">';
	$after_widget  = '</div>';
	$before_title  = '<h4 class="title-s heading title-style pb-15">';
	$after_title   = '</h4>';

	/**
	 *
	 *  Sidebar
	 *
	 */
	register_sidebar( array(
		'id'            => 'blog-sidebar',
		'name'          => esc_html__( 'Blog Sidebar', 'alcy' ),
		'description'   => esc_html__( 'This is the widgetized blog sidebar.', 'alcy' ),
		'before_widget' => $before_widget,
		'after_widget'  => $after_widget,
		'before_title'  => $before_title,
		'after_title'   => $after_title,

	) );


} );