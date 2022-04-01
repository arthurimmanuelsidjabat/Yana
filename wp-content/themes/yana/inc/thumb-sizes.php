<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Post Thumbnail
add_theme_support('post-thumbnails');
add_image_size('w600', 600, 400, true);
add_image_size('w470', 470, 450, true);
add_image_size('w400', 400, 300, true);
add_image_size('w350', 350, 250, true);
add_image_size('w140', 140, 140, true);