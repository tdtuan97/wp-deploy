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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'db_user' );

/** Database password */
define( 'DB_PASSWORD', 'db_password' );

/** Database hostname */
define( 'DB_HOST', 'wp_db' );

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
define( 'AUTH_KEY',         '],dW8oxFaQk8/}t=WJub]7vvDfHOD1.s$psKC1iSD97{y>/LC.E:PLhh}:kT9wlY' );
define( 'SECURE_AUTH_KEY',  '&v?%*9C|vzo0j7jJSM@v^[1JY^$}Y&GIJZ9)|T*_$FlZf))L~<5SsY-fSycUtxq*' );
define( 'LOGGED_IN_KEY',    '_h&VoxvwKBh.Dw~W8`rru/HLOZZB>^-Fp{8mxo.Ge}K..ADQBA(A}8e2&;u<LM?>' );
define( 'NONCE_KEY',        'rfh#)DEX44O;aH(TcjQX{;kzF9^*)C ltX$xs8RqVBhm9f)6!;qkD=t_O/?]t>E{' );
define( 'AUTH_SALT',        'T(xN;9$hY(=5MG}_{*[E`hmpE|$S?e{X[DlbUvut![9j{T].HG.Y+y}wHw8pm) S' );
define( 'SECURE_AUTH_SALT', 'pvah?VgI,A4z^K5g~Ls$IG{K/6gx!Fk0y9(<oUE2BN2duGkTu5*)iClKGa,>aG{3' );
define( 'LOGGED_IN_SALT',   'mN~iAFVyo_u7OC?n[E>7L o&x&Y{O*x|;PjgiO]w{uxum9Vq(Ci5AzSl=tbBjjzc' );
define( 'NONCE_SALT',       'S9{+5rHeSq6.hzyl@+VUazF51_-[Rdc^yy]WsbE9zzZUnsO[`T4X[47uA!hV@v4O' );

//define( 'WP_HOME', 'https://clematisperfume.click' );
//define( 'WP_SITEURL', 'https://clematisperfume.click' );
//define('FORCE_SSL_ADMIN', true);

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
