<?php

/**
 * @package filter_content
 * @version 1.0
 */
/*
 Plugin Name: Filter Content
 Author: Kripanath Aditya
 Description: This plugin update content with the necessary information
 Version: 1.0
 */

add_filter('the_content', 'wptest_filter_content');

function wptest_filter_content($content){
    $word_count_in_content = str_word_count($content);
    $Approximate_read_time = $word_count_in_content/100;
    
    $content = '<p>No of words in this article: '.$word_count_in_content.'</p>'
            .'Approximate read time: '.$Approximate_read_time.' mins'.
            $content;
    return $content;
}

