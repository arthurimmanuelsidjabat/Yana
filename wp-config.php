<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "yana" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lwFK%fV~u3ss3(wJeX%$:|jM@cfmtM=7i;a4eE{<=S90+pJLB:l(g389S>m.m/OC');
define('SECURE_AUTH_KEY',  '{),|4au)T^CwNec WT,A5S7R]+&&}fG<:yNbTB;oO>6Gs}?s|Q,I)|5q#I<w|Gdu');
define('LOGGED_IN_KEY',    'thQs`:XuXFu;Ny?[Dg!a4R?L!Tp4l)TDB[{)mK|H%L<c#Cvnd+k9e-[i^|FQd=I6');
define('NONCE_KEY',        'Qx><Za)BhHtWpZ~BVyq_pPtL^HVmY5@+-3-=1:-K.VY ?UGkW`d!uhOr:[ s-.xl');
define('AUTH_SALT',        'pnMk7_Y&%M<BF{v/`W;A; 7V}e5q@j_P]@W@QGCrI/f+AE(x%/e2U!/eNlhfO-AG');
define('SECURE_AUTH_SALT', 'I%z@/$d[~ySB,a@Ey)4[NeHX/5X[FCKHF6fZTqQ>*-YiD7;xcYbyN&M@>RR c6w=');
define('LOGGED_IN_SALT',   '_DXjMM-Sf|&KHzIg-Ex-Ea[g-/xb]lR$]J#4T}JCzC()CH)-A*]Hj#HeZrSkICT!');
define('NONCE_SALT',       '==,TA4b&N:h+l!|<qz3+`Im!=Y6~^rS92&1aoq5I}hT8qbyDeE$GY0Uz:|PJ+-Aa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yanawp369_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
@ini_set('log_errors','on'); 
@ini_set('display_errors','on'); 
@ini_set('error_log','error_log.log');

/** Disable Post Revisions */
define('WP_POST_REVISIONS', false );

/** Empty trash. */
define( 'EMPTY_TRASH_DAYS', 0 );

/** Disable Post Revision. */
define( 'AUTOSAVE_INTERVAL', 14400 );

/** Disable the Theme and Plugin Editors */
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
