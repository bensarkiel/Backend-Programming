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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); 


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
define( 'AUTH_KEY',         'x[M#6Gxg/ma[p 1$lsf-!uPD:l)6qd4~]Hi>>[T9[n8z4>`2BNfaaNO>fY)7rJ`@' );
define( 'SECURE_AUTH_KEY',  'hD*`{<H+O1L>1V@0$/T.r@rCA0zQQl>?ulOZW#:z#/]$B_6,D2TP3tUW#xwPsq6R' );
define( 'LOGGED_IN_KEY',    'z0/h%7uMXx,B`gB,o2ceC=I-S}~&hZ)A}o>lXjEy=/ra~zi|b]7<AjqgCp)$n*[8' );
define( 'NONCE_KEY',        '3bmG+V_`|q7E:T^d.GW|P.,S+UY0rL$x_p6|i]zfj:w.@Y{?0$ tWZRc!Agw}.Lh' );
define( 'AUTH_SALT',        'IGB]rW8TU(Tz  x.vujpB[EA`U3e+0/P$R*jZCygoGb7Nz{F=g]qNd,P:Wy|,ZQ&' );
define( 'SECURE_AUTH_SALT', 'rpN?-5<19YQ8n!xE]BO!|r!$u!a~8>an`BtzvTJ7pP?.e{9)dYzhfT?dewz,n<w(' );
define( 'LOGGED_IN_SALT',   '&+ ><>3aM??0B!|}z.a6?<5[bq!2uT1wF$F~@+*b <FpfRDDR4lc^dWZO`}]6mZ4' );
define( 'NONCE_SALT',       '9.5_j8@!@ jf7)a+z$jZqA~vb:aJZ4,x:}eBm<_gGJ9ro#zd@EG?$.Xd3%&&vQ_~' );

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
