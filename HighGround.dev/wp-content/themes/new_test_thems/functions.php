<?php 
add_action('wp_enqueue_scripts', 'enabling_style');
add_action('wp_footer', 'enabling_script');
add_action('after_setup_theme', 'anabling_menu');
add_action( 'widgets_init', 'anabling_sidebar' );

function enabling_style(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('base', get_template_directory_uri().'/assets/css/base.css');
    wp_enqueue_style('layout', get_template_directory_uri().'/assets/css/layout.css');
}

function enabling_script(){
    wp_enqueue_script('ajax', get_template_directory_uri().'//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-1.10.2.min.js');
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js');
}

function anabling_menu(){
    register_nav_menu('top', 'Menu_header');
}

function anabling_sidebar(){
    register_sidebar( array(
		'name'          => 'SidebarPage',
		'id'            => "sidebar",
		'description'   => 'Сайдбар главной страницы',
        'before_widget' => null,
		'after_widget'  => null,
	) );
}


// ФИЛЬТРЫ


add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Read More...</a>';
}

