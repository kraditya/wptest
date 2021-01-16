<?php

/**
 * @package custom_post_column
 * @version 1.0
 */
/*
 Plugin Name: Add custom post column
 Author: Kripanath Aditya
 Description: This will add new columns in custom post list
 Version: 1.0
 */


function wptest_custom_post_book(){
    $args = array(
        'public'=>true,
        'label'=>'Books'
    );
    register_post_type('book', $args);
}

add_action('init', 'wptest_custom_post_book');

add_filter('manage_book_posts_columns', 'wptest_custom_post_book_column');

function wptest_custom_post_book_column($columns){
    
    $columns = array(
        'cb' => '<input type = "checkbox"/>',
        'title ' => 'Book Title',
        'author ' => 'Book Author',
        'amount ' => 'Book Amount',
        'date ' => 'Created Date',
        
    );
    
    return $columns;
}