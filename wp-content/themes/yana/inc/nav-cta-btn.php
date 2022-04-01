<?php
/**
 * Do not edit anything in this file unless you know what you're doing
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

function add_search_form($items, $args) {
    if( $args->theme_location == 'primary_navigation' ) :

        $items .= '<li class="nav-item contact-btn align-self-center"><a class="btn btn-primary text-white" href="/contact"> Contact </a></li>';
        return $items;
        
    endif;
}