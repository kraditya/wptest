<?php
/**
 * @package add_admin_menu
 * @version 1.0
 */
/*
Plugin Name: Add Admin Menu
Author: Kripanath Aditya
Description: This plugin will add an admin menu
Version: 1.0
*/

function test_add_admin_menu()
{
    add_menu_page('Playlist', 'Playlist', 'manage_options', 'playlist', 'playlist_fn');
    add_submenu_page('playlist', 'Submenu 1', 'Submenu 1', 'manage_options', 'Submenu_1', 'submenu_fn');
}

function playlist_fn()
{
    echo 'This is our admin menu page';
}

function submenu_fn()
{
     echo 'This is our first submenu page';
}

add_action('admin_menu','test_add_admin_menu');
