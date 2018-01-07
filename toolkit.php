<?php
/*
Plugin Name:  Codefactory Toolkit

*/
//Exit accessed directly
if(! defined('ABSPATH')){
	exit;
}

//Define
define('CODEFACTORY_ACC_URL', WP_PLUGIN_URL .'/'. plugin_basename(dirname(__FILE__)) .'/');
define('CODEFACTORY_ACC_URL', plugin_dir_path(__FILE__) );






//Print shortcode in widgets
add_filter('widget_text', 'do_shortcode');

//Lodeing vc addons
require_once(CODEFACTORY_ACC_URL. 'vc-addons/vc-blocks-load.php');


//Theme shortcode
require_once(CODEFACTORY_ACC_URL. 'theme-shortcodes/slide-shortcode.php');

//Shortcode depends on visual composer
include_once(ABSPATH. 'wp-admin/includes/plugin.php');
if(is_plugin_active('js_composer/js_composer.php')){
	//require_once(CODEFACTORY_ACC_URL. 'theme-shortcodes/staff-shortcode.php');
}

//Registering codefactory toolkit files

function codefactory_toolkit_files(){
	wp_enqueue_style('owl-carousel', plugin_dir_url(__FILE__). '/assets/css/owl.carousel.css');
	wp_enqueue_style('codefactory-toolkit', plugin_dir_url(__FILE__). '/assets/css/codefactory-toolkit.css');
	wp_enqueue_script('owl-carousel', plugin_dir_url(__FILE__). '/assets/js/owl.carousel.min.js', array('jquery'), '3.7.0', true);;
	
}
add_action('wp_enqueue_scripts', 'codefactory_toolkit_files');



    
