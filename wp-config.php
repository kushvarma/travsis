<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tr45ndh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Ku247v@ma');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kTA j:ZAaLJSj7h-z%J3h3+:u?D{O!|iuP uzpZfbBIRdo Wy*&CRjtsb n8,1de');
define('SECURE_AUTH_KEY',  'X!i6Y5b{(D}yS2U/d9[;bcA>k:/^By*~iY-~m %`P19W!JTZ!]igWN@2D*K~9z@L');
define('LOGGED_IN_KEY',    ')4ffnZj2c+P5d7D8K^WF//NM=`GFhgwv.=#ae6=k5.E7V8u+2 Ho2w:ZG0v(I]~S');
define('NONCE_KEY',        '=]IJBF@&#`Y[6{;ulf1]QPqd1[P k)^2+tKpSL75)Xs1Lp6ECR}Tr?cNp:6Q=t6q');
define('AUTH_SALT',        ' `_6{14XhalBb<Z8dydvhrD7/l_EwN1K]Gn?cY#pJ_61MNy5<mP8PkVI6c.[=*p9');
define('SECURE_AUTH_SALT', 'K;&I=ZqDG<mGIcB!~Sc;z5d^5uZWnXwgWQ@puc_0UqpqBq{N=ZEggi%1F,C7?Sq9');
define('LOGGED_IN_SALT',   'zK`&cD~&4]qqY=zNr_Hna4^1.XyqL][J=BL77Xb1unkjU.S!RnN3Ou ^&X5ad.;V');
define('NONCE_SALT',       'i_8!<?rZwt5Vv4~(_eB4KPrLx&w4z?|W;jc@CYZY|p`~sMfX%uua`YQWXP|0hNq:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
