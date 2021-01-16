<?php 

/**
 * @package add_meta_box
 * @version 1.0
 */
/*
 Plugin Name: Add Meta Boxes
 Author: Kripanath Aditya
 Description: This plugin will add meta boxes on the post screen
 Version: 1.0
 */

/* ----------------------------- create meta box ---------------------------- */

 function test_metabox()
 {
     add_meta_box(
         'test_metabox', 'Test Custom Meta Box', 'test_metabox_function', 'post', 'side', 'high'
     );
 }

 function test_metabox_function()
 {
    echo"This is box for hooks tutorial<br><br>";
    ?>
    <label>Name</label>
    <input type="text", name="test_metabox_name", placeholder = "Enter your name">
    <?php
 }

 add_action('add_meta_boxes', 'test_metabox');

/* --------------------------- save metabox value --------------------------- */


function test_save_metabox_value($post_id)
{
    $test_metabox_name = isset($_REQUEST['test_metabox_name'])?trim($_REQUEST['test_metabox_name']):'';
    
    if (!empty($test_metabox_name))
     {
        update_post_meta($post_id, 'test_metabox_value', $test_metabox_name);
    }
}

add_action('save_post', 'test_save_metabox_value');

