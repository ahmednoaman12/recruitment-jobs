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
define( 'DB_NAME', 'recruitment-db' );

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
define( 'AUTH_KEY',         'B3}lzHZ/~PaLxZytB{#2s?IG!L/kx_e++zP+E2qy]5lQnMq{=&.{X4;gV}qdg[6%' );
define( 'SECURE_AUTH_KEY',  '9Zv8ydIV7/?dts_B?Zc{8Gh /y i6e85.#T-iaWDt)?Wt3z3:wl`vuG_Y7E9e6iZ' );
define( 'LOGGED_IN_KEY',    'W>BCtBh/%*Z CXHMY/{[AKV4u87GGRk$LppG5HNXi%2wgLsr-Fu_(hV,<6j9C-mH' );
define( 'NONCE_KEY',        'tb]4#{YiFXMT0(0mj0,KY.hRu*]1bP0g#>ueeKeq{nsCIb%%U[S^l P=ss24f[rW' );
define( 'AUTH_SALT',        '(U*4^rpZ/L}oGn4}#G61*,BRcdlle*w]k/qOE<>#sWR~_}m]0Yj]2y@oV.KKWAsp' );
define( 'SECURE_AUTH_SALT', '-o<AS5YEOk_D$49NEw+4R8t2`1271bW-$&^!?RB]?%o*;%GWmc<vw.3g0MyI9i9i' );
define( 'LOGGED_IN_SALT',   'Gv&bJ=v?zVj8b&z]hU^lY+>3^;tqRBtj+m/?)!_O^GDKv~NIF>R^!03;{,Im,uBu' );
define( 'NONCE_SALT',       ';JEt9G&<<J2JfhCWY W]SA9umm ebZ}~hl%Rq}s8q`E>y2w?^L^UFDS1,|AyE[It' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 're_';
ini_set('max_execution_time', 1200);

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
