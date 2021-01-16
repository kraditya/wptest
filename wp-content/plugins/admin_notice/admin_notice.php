<?php 

/**
 * @package admin_notice
 * @version 1.0
 */
/*
 Plugin Name: Admin Notice
 Author: Kripanath Aditya
 Description: This plugin will show an admin notice on the admin screen
 Version: 1.0
 */

function test_admin_notice()
{
    ?>
    <div class="notice notice-error is-dismissible">
        This is error message
    </div>
    <div class="notice success is-dismissible">
        This is a success message
    </div>
    <?php
}

add_action( 'admin_notices', 'test_admin_notice' );

?>