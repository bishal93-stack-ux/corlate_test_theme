<?php

function corlatetesttheme_styles(){
	$uri = get_theme_file_uri();
	wp_register_style('site-bootstrap',$uri.'/assets/css/bootstrap.min.css',array(),null);
	wp_register_style('site-font',$uri.'/assets/css/font-awesome.min.css',array(),null);
	wp_register_style('site-animate',$uri.'/assets/css/animate.min.css',array(),null);
	wp_register_style('site-pretty',$uri.'/assets/css/prettyPhoto.css',array(),null);
	wp_register_style('site-responsive',$uri.'/assets/css/responsive.css',array(),null);
	wp_enqueue_style( 'site-bootstrap');
	wp_enqueue_style( 'site-font');
	wp_enqueue_style( 'site-animate');
	wp_enqueue_style( 'site-pretty');
	wp_enqueue_style( 'style', get_stylesheet_uri(),[],filemtime(get_template_directory(). '/style.css'),'all');
	wp_enqueue_style( 'site-responsive');
}

add_action('wp_enqueue_scripts', 'corlatetesttheme_styles');
