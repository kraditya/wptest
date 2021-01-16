<?php
/**
 * @package wp_head_wp_footer
 * @version 1.0
 */
/*
 Plugin Name: Add CSS JS file in Header Footer
 Author: Kripanath Aditya
 Description: This plugin will add CSS and JS files in Header and Footer
 Version: 1.0
 */

/* ----------------------------- create meta box ---------------------------- */

function wptest_head_file_css(){
    echo '<link rel="stylesheet" href = "'.plugin_dir_url(__FILE__).'assets/css/plugin.css">';
}

add_action("wp_head","wptest_head_file_css");

function wptest_footer_file_js(){
    echo '<link rel="stylesheet" href = "'.plugin_dir_url(__FILE__).'assets/js/plugin.js">';
}

add_action("wp_footer","wptest_footer_file_js");

