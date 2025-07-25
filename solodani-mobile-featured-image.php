<?php
/*
Plugin Name: Featured Image for Mobile
Plugin URI: http://solodani.com
Description: Provides a new field in posts to be able to set a different featured image for mobile
Version: 1.0
Author: SoloDani
Author URI: http://solodani.com
*/

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

define('MOBILE_FEATURED_IMAGE_PATH', plugin_dir_path(__FILE__));
define('MOBILE_FEATURED_IMAGE_URL', plugin_dir_url(__FILE__));

// Include Required Files
require_once plugin_dir_path(__FILE__) . 'includes/mobile-featured-image-admin.php';
require_once plugin_dir_path(__FILE__) . 'includes/mobile-featured-image-front.php';

// Activation Hook
function solodani_mobile_featured_image_activate() {

}
register_activation_hook(__FILE__, 'solodani_mobile_featured_image_activate');

// Deactivation Hook
function solodani_mobile_featured_image_deactivate() {

}
register_deactivation_hook(__FILE__, 'solodani_mobile_featured_image_deactivate');

// Initialization Placeholder
function solodani_mobile_featured_image_init() {

}
add_action('init', 'solodani_mobile_featured_image_init');
