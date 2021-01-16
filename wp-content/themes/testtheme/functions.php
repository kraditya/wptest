<?php

/* -------------------------- Add css and js files -------------------------- */

function test_add_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'test_add_theme_scripts');

/* --------------------------- add theme supports --------------------------- */

function test_add_theme_support()
{
    // die("theme setup done");
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'test_add_theme_support');

/* ---------------------- Create custom post type news ---------------------- */

function test_create_post_type()
{
    register_post_type('news', array(
            'menu_icon' => 'dashicons-money',
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('News'),
            ),
            'public' => true,
            'has_archieve' => false,
            'rewrite' => array(
                'slug' => 'news',
            ),
        )
    );
}

add_action('init', 'test_create_post_type');


/* ---------------------- Register menu ---------------------- */

function test_register_menu()
{
    register_nav_menus(
            array(
                'header-menu'=> __('Header Menu'), //1st location
                'footer-menu'=> __('Footer Menu') //2nd location
            )
        );
}

add_action('init', 'test_register_menu');

/* ---------------------------- register sidebar ---------------------------- */

function test_register_sidebar()
{
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'testtheme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action('widgets_init','test_register_sidebar');







































