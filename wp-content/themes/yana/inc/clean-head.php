<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function head_cleanup() {

    // Clean the <head>
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

    // Remove emojis
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
    add_filter('emoji_svg_url', '__return_false');

    // Show less info to users on failed login for security
    add_filter( 'login_errors', 'show_less_login_info' );

    // Disable generate and display WordPress version
    add_filter( 'the_generator', 'no_wp_generator' );

    // Remove class and ID from menu item
    add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
    add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

    // Remove REST API Link <api.w.org>
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);

    // Remove the REST API endpoint.
    if(!is_user_logged_in()) remove_action( 'rest_api_init', 'wp_oembed_register_route' );

    // Disable self-pingbacks
    add_action('pre_ping', 'disable_self_pingbacks');

    // Disable WP-Embed
    add_action( 'wp_footer',function () { wp_deregister_script( 'wp-embed' ); });
    add_action( 'init', 'disable_embeds_code_init', 9999 );

    // Elementor
    add_action( 'after_switch_theme', 'default_elementor_options' );

}

add_action( 'init', 'head_cleanup' );

/**
 * All filters for custom output
 */

// Emojis
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }
    return $urls;
}

// Show less info to users on failed login for security
function show_less_login_info() {
    return "<strong>ERROR</strong>. Invalid Username or Password";
}

// Disable generate and display WordPress version
function no_wp_generator()  {
    return '';
}

// Remove class and ID from menu item
function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

// Disable Self Pingbacks
function disable_self_pingbacks(&$links) {
    $home = get_option('home');
    foreach($links as $l => $link) {
        if(strpos($link, $home) === 0) {
            unset($links[$l]);
        }
    }
}

// Disable WP-Embed
function disable_embeds_code_init() {    
    add_filter( 'embed_oembed_discover', '__return_false' );
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );    
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
    add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );    
    add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );    
    remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}
function disable_embeds_tiny_mce_plugin ($plugins) {
    return array_diff($plugins, array('wpembed'));
}
function disable_embeds_rewrites($rules) {
    foreach($rules as $rule => $rewrite) {
        if(false !== strpos($rewrite, 'embed=true')) {
            unset($rules[$rule]);
        }
    }
    return $rules;
}

// Elementor
function default_elementor_options() {
    
    $cpt_support = get_option( 'elementor_cpt_support' );
    
    //check if option DOESN'T exist in db
    
    if( ! $cpt_support ) {
        $cpt_support = [ 'page' ];
		update_option( 'elementor_cpt_support', $cpt_support );
	}
    
    // Add support for FontAwesome4
	update_option( 'elementor_load_fa4_shim', 'yes' );

	// Update Default options
	update_option( 'elementor_disable_typography_schemes', 'yes' );
	update_option( 'elementor_disable_color_schemes', 'yes' );

}

/* Thank You Footer WordPress Admin */
add_filter('admin_footer_text', 'remove_footer_admin');
function remove_footer_admin () {
    $today = date("Y");
    echo '<span id="thankyou">&copy;' . $today . ' Cekindo Business International, Ltd.</span>';
}

/** Disable Guttenber Editor on Widget */
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
add_filter( 'use_widgets_block_editor', '__return_false' );