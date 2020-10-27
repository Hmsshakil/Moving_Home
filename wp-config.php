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
define( 'DB_NAME', 'movinghome_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Sc@&@PxDOd|1uk!>DL#|2l]0YPS/r:TaX_lc~nEQTH1D92Gj).q8| fl5m0^kal]' );
define( 'SECURE_AUTH_KEY',  'L>{%ync2^d;~1{Rj?][.o7?2YYs|c7Hikq`3Li(A3.J/eTh /8wT02eRR0aHd#;>' );
define( 'LOGGED_IN_KEY',    'K(zu^fQI$O^MfE;b-5~o%Ma;6oCtl`aaOh ~v5IKm;vjESBX$om7dC?GsX-/J`>*' );
define( 'NONCE_KEY',        ',+^Y3nRc,hvV?ZIVDauw<pa/.:kLI7UZEv*oD2 .ICP=z.6<{!]eS?=.BOYK%O}8' );
define( 'AUTH_SALT',        '3+EO7>s6;`O}?,8K4~8Ikb|;/xWJft#XC}kAws^1>eRwWh:vze^%H9&T9x*U2bf,' );
define( 'SECURE_AUTH_SALT', '0-EzT3/^#pMGl%OAR(5VfPCCK!mC/o^,)&{JkC?WQ^G@#v+uTWHSCc.mk;k hWcS' );
define( 'LOGGED_IN_SALT',   '&^;rbM2H!}f5JBkd4hNn^v;a^Yd4&F7|=6Akf,_fdXoQ]|DIOhT:wCfWH:Ep_*=?' );
define( 'NONCE_SALT',       'VK;YY?!j}Vn+ ,nS`K0c>M!gqV<*4GbJwBExs+Q]U&HvLB~O!&X{o9/.d]AtcDM@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
