<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Studio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '41sxuF#~)yu{}?kpFg(cl/MxbY^0a#qk|sC{qHSNwLhixeeD|Ymf^/(>-gl:RSfR' );
define( 'SECURE_AUTH_KEY',  ';JvkKPcpe#G_0>leQ3Mid=jsPrbXR[60H`*I(WTta>I{O_WW=04,f9JP6 Ns_u.:' );
define( 'LOGGED_IN_KEY',    '19``FXUAbK:@hL+BMe dS>$1M~kaHcH&j(H%g9`B#WN[})Q+eNYP4<p^YN*o1%Pf' );
define( 'NONCE_KEY',        '&{>4/v&Cj/0N=D,hEhmas:o1Y1(+dNNwTcy|0p-4J-$_X^f.7k=ik);P~t3X|+B,' );
define( 'AUTH_SALT',        'p`Pu%`P3=tQe[|dx3Jt/p?e1/VwWfai%a.@d>@Ids$atM<>~^9R@W&xn>tLwc.<F' );
define( 'SECURE_AUTH_SALT', '/(/Ms@kS-MOfE2=`;NtvR;  $4}h}3`rMwiAqJ*lu9Q8DJEYmjG+@xCq%c:4LhM:' );
define( 'LOGGED_IN_SALT',   'j34AkwisBs8dKe~bj[!,.~QYpC^5[#Vo6.4ksXEvk:Jw:sNtCL!~CiUtY`v;AbY#' );
define( 'NONCE_SALT',       'K]i=#FnBd09l.fL:uf`.eO-Q`JNeo<keWP^v560)c3qE$rJFxt1%Cn}!Iskis.g;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
