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
if($_SERVER['SERVER_NAME'] == 'wordpress') {
  define('DB_NAME', 'wordpress');

  /** MySQL database username */
  define('DB_USER', 'root');

  /** MySQL database password */
  define('DB_PASSWORD', '');

  /** MySQL hostname */
  define('DB_HOST', 'localhost');

  /** Database Charset to use in creating database tables. */
  define('DB_CHARSET', 'utf8mb4');

  /** The Database Collate type. Don't change this if in doubt. */
  define('DB_COLLATE', '');
}
else {
  define('DB_NAME', '2339325_context');

  /** MySQL database username */
  define('DB_USER', '2339325_context');

  /** MySQL database password */
  define('DB_PASSWORD', '1qaz2wsx!QAZ@WSX');

  /** MySQL hostname */
  define('DB_HOST', 'fdb17.freehostingeu.com');

  /** Database Charset to use in creating database tables. */
  define('DB_CHARSET', 'utf8mb4');

  /** The Database Collate type. Don't change this if in doubt. */
  define('DB_COLLATE', '');
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i|Ku,H4sg .uJ*tfX3SY{1R(JLj4py&f;>hM<~>D38iy^;p5KV:+xL#$Q<&Ej~Au');
define('SECURE_AUTH_KEY',  '0wke&+ycec%OY(]ID&C3D(@%F1WSe5Dhv6d4&h[~4dWuh?7r@-:S 6{;M0ZC>`jN');
define('LOGGED_IN_KEY',    '&&I~*/k++oc-%|_y6MfE6TE>.DC$3tDBw] G!A2<bYW`J$4XFG<9UJ]4?4h,K2Dx');
define('NONCE_KEY',        'E/lAK)yKl0%i3n-kAvT%j7HD$S(yo>wA3`m5aQlebA2lmC9J+p#8SKO/vWe2z`$%');
define('AUTH_SALT',        'yAAZ@]u*Yg2BlOL<{5rKI4}-EuYz9;$3Qu4X&}+(i&8>{5jZmzN,a@nUjgp|xd=Y');
define('SECURE_AUTH_SALT', 'rfN*zewlgH a5YW{lI<G)Y[j}=6-ixwgs:m)XC~8@iDK=E* `}G@/mnd{}H*k]6<');
define('LOGGED_IN_SALT',   '^[3:0U]AoV)/2G<I}%Ru$UOKCg2/A1AErl;|Vrv<[m% 7EGHW`05D,,8wZ9SsOi!');
define('NONCE_SALT',       'i[v}3zchuKo{}*9B1fI7ef9<4eo|Y=}# udz*A}>x?q25Zve+&:[tMrSZ1s~3b k');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
