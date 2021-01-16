<?php

/**
 * @package admin_bar_menu
 * @version 1.0
 */
/*
 Plugin Name: Add Admin Bar Menu
 Author: Kripanath Aditya
 Description: This plugin will add an admin bar menu
 Version: 1.0
 */


function test_custom_bar_menu($wp_admin_bar)
{
    $args = array(
        'id'=>'test-blog',
        'title'=>'Programming Questions',
        'href'=>'https://programming-qs.blogspot.com/',
        'meta'=>array(
            'class'=>'custom_blog',
            'target'=>'_blank'
        )
    );
    $wp_admin_bar->add_node($args);
    
    $submenu1 = array(
        'id'=>'submenu1',
        'title'=>'google',
        'href'=>'https://www.google.com',
        'parent'=>'test-blog'
    );
    
    $wp_admin_bar->add_node($submenu1);
}

add_action('admin_bar_menu', 'test_custom_bar_menu',999);