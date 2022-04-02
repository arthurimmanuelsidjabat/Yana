<?php
/**
 * Register Slider Custom Post Type
 *
 * @package Hamanami
 * @author  Arthur Immanuel
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'init', function() {
    register_extended_post_type(
        'slider', [
            'show_in_feed' => true,
            'menu_icon'    => 'dashicons-format-gallery',
            'menu_position' => 21,
            'hierarchical' => true,
            'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'page-attributes'),

            /** Disable View */
            'exclude_from_search' => true,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'query_var' => false,

        ],
        
        [
            'singular' => 'Slider',
            'plural'   => 'Sliders',
            'slug'     => 'slider',
        ]
    );

});