<?php

/**
 * Register Team Member Custom Post Type
 *
 * @author  Arthur Immanuel
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

add_action('init', function () {
    register_extended_post_type(
        'team',
        [
            'show_in_feed' => true,
            'menu_icon'    => 'dashicons-groups',
            'menu_position' => 20,
            'hierarchical' => true,
            'supports' => array('title', 'author', 'thumbnail', 'excerpt', 'page-attributes'),

            /** Disable View */
            'exclude_from_search' => true,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'query_var' => false,

            # Admin Columns
            'admin_cols' => [

                'team_role' => [
                    'taxonomy' => 'team-roles'
                ]
            ],

            'archive' => [
                'nopaging' => true,
            ],
        ],

        [
            'singular' => 'Team',
            'plural'   => 'Teams',
            'slug'     => 'team',
        ]
    );

    register_extended_taxonomy(
        'team-roles',
        'team',
        array(

            'dashboard_glance' => true,

            'admin_cols' => array(

                'updated' => array(
                    'title'       => 'Updated',
                    'meta_key'    => 'updated_date',
                    'date_format' => 'd/m/Y'
                ),
            ),
        ),

        array(

            'singular' => 'Role',
            'plural'   => 'Roles',
            'slug'     => 'team-roles'

        )
    );
});
