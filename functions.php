<?php

add_action('after_setup_theme', 'BV_Boilerplate_Setup');
function BV_Boilerplate_Setup(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );	
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		));
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		));
	add_theme_support('custom-background', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		));

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bv_menu' ),
		'footer' => esc_html__( 'Footer', 'bv_menu' ),
		));
}
// end of BV_Boilerplate_Setup
add_action('widgets_init', 'BV_Boilerplate_Widgets_Init');
function BV_Boilerplate_Widgets_Init(){
	register_sidebar( array(
		'name'          => esc_html__( 'BV Widget', 'BV Widget' ),
		'id'            => 'BV-Widget',
		'description'   => esc_html__( 'BV Widget', 'BV Widget' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		));
}
//end of BV_Boilerplate_Widgets_Init
add_action('wp_enqueue_scripts', 'BV_Boilerplate_Scripts');
function BV_Boilerplate_Scripts(){
	wp_enqueue_style( 'BV-Boilerplate-style-reset', get_stylesheet_uri() );
	wp_enqueue_style( 'BV-Boilerplate-bootstrap', get_template_directory_uri() . '/less/css/bootstrap.min.css' );
	wp_enqueue_style( 'BV-Boilerplate-style', get_template_directory_uri() . '/less/css/style.min.css' );
	wp_enqueue_script('BV-Boilerplate-jquery', get_template_directory_uri() . '/js/lib/jquery.min.js');
	wp_enqueue_script('BV-Boilerplate-angularjs', get_template_directory_uri() . '/js/lib/angular.min.js');
	wp_enqueue_script('BV-Boilerplate-angular-route', get_template_directory_uri() . '/js/lib/angular-route.min.js');
	wp_enqueue_script('BV-Boilerplate-mainjs', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script('BV-Boilerplate-app', get_template_directory_uri() . '/js/app.js');
}
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/less/css/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');
require('inc/custom_post_type.php');
require('inc/custom_taxonomies.php');
require('inc/custom_meta_boxes.php');