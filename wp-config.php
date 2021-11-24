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
define( 'DB_NAME', 'starshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '^r&3^sndV?Y1N_w.GY!c%l@EgGZ%1q OxT-tq3ZXCYjlPc|*>#VkXf2):Q!gA$o(' );
define( 'SECURE_AUTH_KEY',  'yp}]!bg+|*!|O4owTUn_MqhSxfp)0K7K|n84l`P(Rs<9e;#|]ZX</yR_D`izg7_*' );
define( 'LOGGED_IN_KEY',    'zUe$euFDN<Bw^EHEFjN,cQ_*r(?R {Y%O0~^{F]aTE*^Ef+-|A{^b1fqaJ`X#@~G' );
define( 'NONCE_KEY',        '*T0kJu$[I}:0SF?=*nRc8d`T(7yv-0kzBx_#B](*;DJjAn03nh+v>76pOh+ElQ2/' );
define( 'AUTH_SALT',        '|UsF(Aw_I(AXbaRc89J2{gOjqwyR^W5lH>s !f1rt8E[yK6Yo@#zWN^5W#.+ZkKC' );
define( 'SECURE_AUTH_SALT', ';l(!P&gMJ55Xg]zjd(j(Ka08H hWl~UQoTWabuSiv7@m}Xd*4:?SwafY@h=-wzlT' );
define( 'LOGGED_IN_SALT',   '7*Q *1!kfm60FXn9,l`c8F8Ops+.4,_rUNU@~0FGG00?Oc{^Ra2R!cr3,%([m)V?' );
define( 'NONCE_SALT',       '1_1Y;&E/aA2e>|8:+F]E3=iw&mJ:H+k`|;9+*`:#XenbFwsaBTKqv*T9B{j$Nf}H' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
