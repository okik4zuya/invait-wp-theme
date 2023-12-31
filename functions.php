<?php 

require(get_theme_file_path('/inc/rest-filter-message.php'));
require(get_theme_file_path('/inc/rest-post-message.php'));
function invait_include_files()
{
    wp_enqueue_script('jquery');
    //wp_enqueue_script('dayjs-relativetime', '/js/lib/dayjs-relativetime.js');
    wp_enqueue_style('spacing_css', get_theme_file_uri('/css/spacing.css'));
    wp_enqueue_style('pure_css', get_theme_file_uri('/css/lib/pure.css'));
    wp_enqueue_style('pure_grids_css', get_theme_file_uri('/css/lib/pure-grids.css'));
    wp_enqueue_style('pure_grids_responsive_css', get_theme_file_uri('/css/lib/pure-grids-responsive.css'));
}

add_action('wp_enqueue_scripts', 'invait_include_files');

function invait_post_types(){
    register_post_type('message', array(
        'show_in_rest' => true,
        //'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'messages'),
        'has_archive' => true,
        'public'=> true,
        'menu_icon' => 'dashicons-comments',
        'labels' => array(
            'name' => 'Messages',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Message',
            'edit_item' => 'Edit Message',
            'all_items' => 'All Messages',
            'singular_name' => 'Message'
        ),
    ));
}
add_action('init', 'invait_post_types');

function invait_custom_rest(){
    register_rest_field('message', 'invitation_id', array(
        'get_callback' => function (){return get_field('invitation_id');}
    ));
}
add_action('rest_api_init', 'invait_custom_rest');
