<?php
/**
 * Register Services Custom Post Type
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
        'service', [
            'show_in_feed' => true,
            'menu_icon'    => 'dashicons-sos',
            'menu_position' => 21,
            'hierarchical' => true,
            'taxonomies' => array( 'category' ),
            'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),

        ],
        
        [
            'singular' => 'Service',
            'plural'   => 'Services',
            'slug'     => 'services',
        ]
    );

}); 