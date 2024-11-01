<?php
/*
Plugin Name: Wp Custom Scroll
Plugin URI:  https://wordpress.org/plugins/comment-form-validation/
Description: This plugin use for wordpress custom scroll on whole page.
Version:     1.1 
Author:      Abhay Yadav
Author URI:  http://abhayyadav.com
License:     GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function cf_scroll() {
	wp_enqueue_style( 'customscrollcss', plugins_url( 'css/custom-scrollbar.css', __FILE__ ) );
	wp_enqueue_script( 'scrollbar-script', plugins_url( 'js/jquery.mCustomScrollbar.concat.min.js', __FILE__ ), array( 'jquery' ) );
	wp_enqueue_script( 'scroll-script', plugins_url( 'js/custom-scroll.js', __FILE__ ), array( 'jquery' ) );
}
add_action('init', 'cf_scroll');


?>