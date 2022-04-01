<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_action('admin_head', 'custom_admin_style');

function custom_admin_style()
{
    echo '
    
    <style>
        #adminmenu #menu-posts-service div.wp-menu-image:before {
            color:#007bff
        }
    </style>
    
    ';
}