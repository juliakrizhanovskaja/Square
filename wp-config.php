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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vfvf1950');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**METHOD FS*/
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's?Y|yF1#g$H.tFRjDBaajX -8,%U} !gpnijUhJCjOLY(3;1W|-0E0TMnWJtVI4l');
define('SECURE_AUTH_KEY',  'bR|h<ju3Bxc5-uK^vxAf#TYCp1<`^YZ|(v/=u2 B.#hhE#i3C=e!D#N/}tQ_[dwp');
define('LOGGED_IN_KEY',    '}T7|RGd3m/$]hN~e5g<P.#(2b;H/F(R]-f~)kk?*!aK2g>.<KP|+xXM/4|`zX8x@');
define('NONCE_KEY',        '~<tm|Z<mncs-A:34%|viQt?56m0St/b^>ZJ-C+KXA^U0`U`JgZxG}?H6~z){!3$w');
define('AUTH_SALT',        '|6{H9qwRUBi-H#DSq0cE9kpE]BG6e|#4R;?}a{Cd)d*&t?e.|E[7#XK@:Vm[?:{G');
define('SECURE_AUTH_SALT', '?u`<{:JL>@vB&pR`zT<|zm,%}mOO`bJQ)A2go[8QxCl4qct+)Lg<-8K$l(S, i+~');
define('LOGGED_IN_SALT',   '}E+RHm>N7E)& 0:c]sIv5E5!rmmH[d/2>f&[z:/{1(r1|/W!!J,-m=/@[%2-sEV{');
define('NONCE_SALT',       'A9NyDSsKFSQRhD<(BkP1qsNjxI,$P-cK~v*Rb|2XZ-.&[`:jJQ#yXE8-yo#9T !D');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
