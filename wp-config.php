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
define('DB_NAME', 'kappscores');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'p@22');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '}ektv}TS47J|8Uf|=;AK,!21egSnRD-R|8`ditN>8^R1}%b!s,I_}z!,=! Dt)M8');
define('SECURE_AUTH_KEY',  'R3Bs!nA>LhaH2nKgOQ+_L&/DAc_43,%OvzUQv$a@h1MwiQFCu`$lN)CCdItJzi|B');
define('LOGGED_IN_KEY',    'al]{~..AUICx(m#~O>*t[yfc`{@1<g!?jnEzM*C7!.lyf]z{_j4F^MJjj/D|wtq+');
define('NONCE_KEY',        '?I0fp&7)#{U2@8Ys5PR(! |us=@Hvt-ZF;vHk*.+UsN#MzXg+5|%wus{}{NtSs,1');
define('AUTH_SALT',        '.;tOSts#e(u=9x1Su<g`R3#_Xlo(SWlwdL5o[[C|qhFa*Rk3w,iF~-btJFdVO3!$');
define('SECURE_AUTH_SALT', 'y*_k5TfeL;.9zX|n5I3(+N`#6_R7}>5Dcj]KSd+aoyF;?H2d|3=+j`[3m ]3@/({');
define('LOGGED_IN_SALT',   ')/QNKU_ FJM *bx-n&LKoMViR2k-Nr0ap0+1>)@`Q$p194[zI=oyx[,Om&Bo?bz7');
define('NONCE_SALT',       'H_XrUKrmA^evbu^^ nnT|V:}ghju9PA$YnL`S$)e{S-/0;<~xOH&QWkZ6=8^eK;?');

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
