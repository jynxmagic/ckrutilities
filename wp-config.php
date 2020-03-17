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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ckrutilitiesdb' );

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
define( 'AUTH_KEY',         '^m7n*err,gK13rD%*-8*YQRS 9ru~:y0TzmV?FF`g,%a&j%54Xiv16GzKF&gOvd+' );
define( 'SECURE_AUTH_KEY',  '6AZ6fqkoeAB#sl=|,FHtpB|z{cc#7ca|g+<%`Yh6YXof}!Y-aBm9ppS6~ne;s7iW' );
define( 'LOGGED_IN_KEY',    'Q},{C,}wl:j8toNqW1&[Eysy:RmN%1iAiOjJpsRtz3H{FuoIm9aIl8Iu,aenY #O' );
define( 'NONCE_KEY',        'sw Ezv6AsgS+g/gZp?C@Np$5:O#F4saLwea+zJ|:vPtI2gB^p9s4&9Tz4V!t2/OM' );
define( 'AUTH_SALT',        '>T~0)3)yE&2R9@BM_K5YJnW0t_ki;4 v=]+Rf-oE,}z x@M_zJ~vq?DhiO[2pO7w' );
define( 'SECURE_AUTH_SALT', 'Pwrq$<.}%~(dr}/?>v0hTZS]$IfN|k=bo5cUvcCoH`nNGHV$dEJCQ@n}3P^Bah1i' );
define( 'LOGGED_IN_SALT',   'ySXT(U;?b(!SLM]b{Si(m%3p zej}wB3up+OW3ppPl#:U8dE$+>>E038]Qro,D.b' );
define( 'NONCE_SALT',       '`37R|~g[< PIuP.EsO~0#Z_&]HV^?e&!3+=x?zv#ULO|>a*gPRG~7<)p#.bzxQ0P' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true);
define('WP_CACHE', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
