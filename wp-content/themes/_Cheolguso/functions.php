<?php



//post meta option
require_once locate_template('/lib/meta-option.php');




//enqueue style & script
function CGS_scripts_styles() {
	wp_enqueue_style( 'cgs_style', get_template_directory_uri() . '/css/style.css', false, '1.0.0');
	wp_enqueue_script( 'cgs_script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'CGS_scripts_styles' );




//feed
function cgs_feed_request($qv) {
    if (isset($qv['feed']) && !isset($qv['post_type']))
    {
        $qv['post_type'] = array('post', 'page');
    }
    return $qv;
}
add_filter('request', 'cgs_feed_request');
