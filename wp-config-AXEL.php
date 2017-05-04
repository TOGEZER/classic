<?php
/**
 AXEL
 **/

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'classic-axel' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j$#H^I#nk_l n||ACxxaa,9|yAJA2pXr+e.8x[Eu76#j[*{V;eOb)h=8SJ!l!7bX');
define('SECURE_AUTH_KEY',  'PFbT,D>@!i&F<ZzxR%)abxgo2|CN*9|>.9yU{7$4T|H6/IB+E1]}rsO##B|*n;vZ');
define('LOGGED_IN_KEY',    'pyv!}t}WsLoPnLu_j83xv|]b&io?4D,XjZrN/SK5TI>2B6BOkasr90pp-eFWYbX)');
define('NONCE_KEY',        '.}qXg9Q$tmwdqCD1TN+JMn/.>jD%2O (fZ|^Q$2HPZ5ov{bw.NZKo3@4J|DGMv@s');
define('AUTH_SALT',        '0~7V+b #N]oql]+R$W~I2/GKF>ezdqVyS &PN?R>?XmTTQ?k*.ceZSZ <|5,IWR$');
define('SECURE_AUTH_SALT', 'ceTPn<R+3K6[2bi:KQP&_c0&B~NPcW-F148+^hm9sRoo{b&ZZo-iG%~F|^Msg4TN');
define('LOGGED_IN_SALT',   '<9p}vWS502+4,nk.XX[m|2(to8M+1 ~V=[L9xb|%lkLwvzc#2lTpz@bXJjL2NdZ0');
define('NONCE_SALT',       '>[;^Z|Ze=eN7gDIh|#5+I^cxoYN`9=|C1sAuNoI5UJkUYNkhvHCGE@f,8Z)dn1(L');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(classic-axel.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
	// define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
	// define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
	define( 'WP_SITEURL', 'http://classic-axel.dev' );
	define( 'WP_HOME',    'http://classic-axel.dev' );

}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
