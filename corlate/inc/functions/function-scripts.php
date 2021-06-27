<?php

function corlate_enqueue_scripts(){
	$uri = get_theme_file_uri();
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', '');
	wp_register_script('corlate-jquery',$uri.'/assets/js/jquery.js',array('jquery'),null,true);
	wp_register_script('corlate-bootstrap-js',$uri.'/assets/js/bootstrap.min.js',array('jquery'),null,true);
	wp_register_script('corlate-prettyphoto',$uri.'/assets/js/jquery.prettyPhoto.js',array('jquery'),null,true);
	wp_register_script('corlate-isotope',$uri.'/assets/js/jquery.isotope.min.js',array('jquery'),null,true);
	wp_register_script('corlate-main',$uri.'/assets/js/main.js',array('jquery'),null,true);
	wp_register_script('corlate-wow',$uri.'/assets/js/wow.min.js',array('jquery'),null,true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('corlate-jquery');
	wp_enqueue_script('corlate-bootstrap-js');
	wp_enqueue_script('corlate-prettyphoto');
	wp_enqueue_script('corlate-isotope');
	wp_enqueue_script('corlate-main');
	wp_enqueue_script('corlate-wow');
}

add_action('wp_enqueue_scripts', 'corlate_enqueue_scripts');

