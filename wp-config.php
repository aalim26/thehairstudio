<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thehairstudio' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'A!A?agiv|KNPail$y,2!!W#m^E503`9q/o2jA0bfK{86eP]Y1p%5I=[2W#[H^hWY' );
define( 'SECURE_AUTH_KEY',  '_8q>#kCSEcXDq6:JwC)V9SnY&Byx;d^$rz4?X+N(P0>5}?L. %M!Fy5t5C^&#~XJ' );
define( 'LOGGED_IN_KEY',    'f2TEh(=F4PyW%*,]w75U<Rg?I&znV4CN8|~c5%]r~Uys,T@0N:FBhv]uR4!H$edY' );
define( 'NONCE_KEY',        'wtaeB@*`kt)}R:;|.o)O6cY2<Y]sQ<i4hsi]XO/SA`xtL,V#G%s` QfM6y,jnpPf' );
define( 'AUTH_SALT',        '$,7)3rZO g!s)epf$0A:-`gGnwU(<%^>L2B)DdNPnj^6r.,cvP%u|^izvFQwc7o<' );
define( 'SECURE_AUTH_SALT', ';H<}m)4v4jiO2fq{(6:UW!/(/l2-3 T&e9Mgy1q?,a%WYk954phM16Al^$&am3j&' );
define( 'LOGGED_IN_SALT',   'fbyB<#SxE:r]iwp%8-,{):W+C> YcSic-7|D:jtWgkfs?ZQ=#!dI21N;@_B**qN]' );
define( 'NONCE_SALT',       'T5}|[.}kq in !@.HJ,gK.atk.~lrdTz$yYrRRVHE2q)^O^f.5bTaO,y-Y(E_z0N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
