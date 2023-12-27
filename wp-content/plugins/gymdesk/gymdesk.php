<?php
/*
Plugin Name: Gymdesk
Plugin URI: https://gymdesk.com
Description: Gymdesk embed shortcode
Version: 1.1
Author: Eran Galperin / Gymdesk
License: MIT license
*/

//define('WP_DEBUG', true);
include_once(dirname(__FILE__) . '/init.php');
$gd = new Gymdesk();
if(!is_admin()){
	add_shortcode("gymdesk-schedule", array($gd,'embedSchedule'));
	add_shortcode("gymdesk-form", array($gd,'embedForm'));
    add_shortcode("gymdesk-booking",array($gd,'embedBooking'));
	add_action('wp_footer', array($gd,'addEmbedScript'));
}