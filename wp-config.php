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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my-database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'i[GFgrQI7+g}+Wgb6ie8+`[UycVsJ$XN]$qQY<(w&Q1R*zHD7ZZ]U+.j)tA1LJsH' );
define( 'SECURE_AUTH_KEY',  'A1(:8eW$Q&+u3qZv.S0D1}V`wv`P&F]sxJ@ZD)62PDg<X&In&Mabf82s*Oz9?R!j' );
define( 'LOGGED_IN_KEY',    'cB|ew.!&JB[YJE5#BK)/ipF#(Z#M1B~4u-5()zUr0U$vj&iv>r#HHk<>MVqsv.Ql' );
define( 'NONCE_KEY',        '(Ito!j@/O03sf*W^[<)hr|dco-|=B16x &}!DTPyB[vLh~AO*;HT[~GR(!>l6y.-' );
define( 'AUTH_SALT',        '8#+:N+AD.<&YE8_:i`!WobL62mgU1<1(oE]{50OM-c`H{TxP8]zT5t/UJ+CDlzHK' );
define( 'SECURE_AUTH_SALT', ':x1OQ&6T7l;eUQtT`|(}jzIbQ0l.W:/CBANtq8c<_<:kolAPlKu?R(Euo{,CFZ2h' );
define( 'LOGGED_IN_SALT',   'ujsAj6Y$r)@}?MX$l9R][61nke(2!zpyzoSsgF+?X_(0ZLeSJjF .1jptE0mvDbZ' );
define( 'NONCE_SALT',       ')vVHz#1jnIV]-1q<3/M[dYLL|qha4}+5.+XBN2Rhg:+%4iW<>4,eZXWCIiV/HGbw' );

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
