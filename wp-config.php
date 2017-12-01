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
define('DB_NAME', 'wp_mmfoundation');

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
define('AUTH_KEY',         'eIN#-^D@rQyG+n6NZM1d!t~sN_KEcfDO:8Dp%F0?=N/b(~0h[0$vK)aeq Bxx]fa');
define('SECURE_AUTH_KEY',  'NL(UHVRe!)&kiX%`0E]Drzz#3EmQ!~r+?ku{EvD;L|$W.Ki~fc{OW2Rf:]7j{a2[');
define('LOGGED_IN_KEY',    '<G/p=r-)~K^A2%yM}K@EEWFR;I1n$n2hUTnB#xA&12-m~CFsIEhG D&$;1Ocl&JW');
define('NONCE_KEY',        '|)(W_>i15[/u*L>-@LvH=K8Gn^@:Y*,a#zh8hlNt6eV[5^ivR<;fq|TrO^`m1lO ');
define('AUTH_SALT',        'O5~L+:p==pKc=pB$NTa$Ra{4oZVZ0hc(e;<zj1J5y`#elUy.50#,nVf=;{]lXulX');
define('SECURE_AUTH_SALT', 'vR1&gs;v4,5$Xld30Dj{ajZ4V.T_L<F]~sU1DS`^fck^]e#l(hoAY>8S;K;KgJI?');
define('LOGGED_IN_SALT',   'WH{]4Q(lbfFrK97<_p`r(+c8(IOQ$<7B[;Q73OScDC?npF6uI?p;#9jR_~V{m/ZV');
define('NONCE_SALT',       'e?B3b#<cu~YPPvR3G6urgmWdj->Ar=5H jfrrk8C5ZXCjXDQu@kx)ej9yb(sr,D[');

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
