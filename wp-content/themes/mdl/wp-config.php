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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4EsBAbVEn?CAawR+;jWC_u!j*WL4K*pA:G#dAr+QmLaY`5v25jj6TiZ~f`$&LSPh');
define('SECURE_AUTH_KEY',  '>2,I?0$h!AUvv;qc*:!!PzRgFne?zO^4GQM=**Qy_+_FP4[v6&@^9/l^E}yBC.7n');
define('LOGGED_IN_KEY',    '0#1NphV1DBY?,[7^CsMeRk^`A?|(D>17/{eaY:n%/AR**eG)a*:C/Ra?.-R8D,}N');
define('NONCE_KEY',        ']!7##j,5_`dCcs1NZU#!n{g||UHAClG9qWG|).N]>TSk@ BJ_}N])>;K6SkMM#pR');
define('AUTH_SALT',        'j5n_VIE&tE{rTP0h+L*j}rX}a+MQ?[cikrJnm[r,0X;i~LSf*yoIc!2!7)xl!nsI');
define('SECURE_AUTH_SALT', 's:/@%<fL8Y0gh+|=g{<,L-h(AdHoGYP7Y1CKl3/2Ews-0&ocZIIj5QrF#-1kEH}W');
define('LOGGED_IN_SALT',   'N^gw!1/5)H2(DLD0g:4-U6R_Vh]<@3GcVxBA3l8>~(hju+nkJwBO@eCt]K+K-I{ ');
define('NONCE_SALT',       '5&CT||ou;u3P9&NptlX{+BMOW+ibYY|_fz~|~6^y^lyx*[>Rftr>[WG_Er$^^!b&');

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
