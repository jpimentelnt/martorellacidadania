<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'martor45_wp393' );

/** Database username */
define( 'DB_USER', 'martor45_wp393' );

/** Database password */
define( 'DB_PASSWORD', '2Gp0(g]uS5' );

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
define( 'AUTH_KEY',         'ekpvxragfs6ove1jmhzycxx9skugecdiwvusn7w2jna6v3ogjknwukrnf1k52fjs' );
define( 'SECURE_AUTH_KEY',  'bmzxfimwcrsn4ubfwhkbxywyfxsfhbthkircsyx9h63sziugc74ukgnqg1lrlh0i' );
define( 'LOGGED_IN_KEY',    'ef1la5vbdlwdkiz9isw3awjuoihhdxyarjz0hpviqtudnfirswfj0sqe8srauqq4' );
define( 'NONCE_KEY',        'lvnvn8l772wixl62buzdrm3vedlgmzj6415ztjvsc8wle9admxm0df0huecz0b1m' );
define( 'AUTH_SALT',        'u0aqbdikmcqcxj2dgauuv8v95tpx8qhlpbhz45ykmrmrwbwutcaufvh0ffg4b581' );
define( 'SECURE_AUTH_SALT', 'rnpgo94s8sobjxozkirhmgnnuc7i4kfdqsxy9cdrpmouf0rwbbd5ehaneecme2au' );
define( 'LOGGED_IN_SALT',   'ncwr4z4atqype1wl2ash8xbrlmjtak3ipwqu1cx9r9stpx1ktwerdmzmr9qzgnao' );
define( 'NONCE_SALT',       'vmeajnlqwcdyfpyqmz0wbgxlymeqmp1er5lkf4tpxaqtml3nsorqygsstanmllnr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpss_';

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
