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
define('DB_NAME', 'martandreu_db');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dJBTJ;8JWUAx6X7z#T[x1ZIPW<L{qNG.=Ex0[_2b?l_MJGn,!BA;%p!sdF9X5&w!');
define('SECURE_AUTH_KEY',  'aRlp1pKVe1sTtxqwppSIXXjZi&J^u3s05-*&S&zLtO^_H>>iK9i-O3~Q77<#XgV5');
define('LOGGED_IN_KEY',    ' ?v~k*Qg( |D][gC,O5QuN[-:).IPy}ND3s=s2*I#B6wWIe]u $c7#Cq{%iJhg_p');
define('NONCE_KEY',        '^.6HpLdd@jLTHM&49s<lv.CPeu_aZS3hA%4,:4%kBF3Wg/lfU[=4}56,?Li)y_~}');
define('AUTH_SALT',        't})T}$DMKabDU|:z]ijqU}ygzk}3>;`_e+XT5w k<fz[2.#kGigZ|o@nU])#{Pcb');
define('SECURE_AUTH_SALT', '?^vhU/r_3FT+Uw@g{qb1@tWI`._:i(|,vRwFblU0,yEr;a#J@ejjjeL/,RvUN=wK');
define('LOGGED_IN_SALT',   ';YJA^y5:wXp8+Q?[F[[f(L>ariMmrkJQ{yhYU!y,}*lSm*>: $+Dz|}[&t,LDyx8');
define('NONCE_SALT',       'w,}:8oBk.iTa`8 h=E4R&u,KeYE(wTX4,?KVDo%-V(6 $UqA]c[gHx%^FOP$Kw)1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'am_';

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

define('PODS_SHORTCODE_ALLOW_SUB_SHORTCODES', true);
