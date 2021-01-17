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

/**
 * Register a custom post type called "news".
 *
 * @see get_post_type_labels() for label keys.
 */
function test_create_post_type() {
    $labels = array(
        'name'                  => _x( 'News', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'News', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'News', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'News', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New News', 'textdomain' ),
        'new_item'              => __( 'New News', 'textdomain' ),
        'edit_item'             => __( 'Edit News', 'textdomain' ),
        'view_item'             => __( 'View News', 'textdomain' ),
        'all_items'             => __( 'All News', 'textdomain' ),
        'search_items'          => __( 'Search News', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent News:', 'textdomain' ),
        'not_found'             => __( 'No news found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No news found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'News Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'News archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into news', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this news', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter news list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'News list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'News list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-money',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields','page-attributes' ),
    );
 
    register_post_type( 'news', $args );
}
 
add_action( 'init', 'test_create_post_type' );


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







































