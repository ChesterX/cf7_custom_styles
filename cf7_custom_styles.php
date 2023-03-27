<?php
/*
  Plugin Name: Contact Form 7 custom styles
  Description: Contact Form 7 custom styles
  Version: 2.1
  License: A "Slug" license name e.g. GPL2
*/

defined('ABSPATH') or die('No script kiddies please!');

function cf7_custom_styles()
{
    if (function_exists('wpcf7_enqueue_styles')) {
        wpcf7_enqueue_styles();
        wp_enqueue_style('cf7-custom-styles', plugins_url('css/cf7-custom-styles.css', __FILE__));
    }
}

if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
    add_action('wp_enqueue_scripts', 'cf7_custom_styles', 30);
    include_once('cf7-functions.php');
}

require 'plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/ChesterX/cf7_custom_styles',
    __FILE__,
    'cf7_custom_styles'
);

$myUpdateChecker->setBranch('main');
