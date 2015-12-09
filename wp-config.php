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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';<*]VE{}%GA-^=`qtQ?Z1=#,E4@0x&S]0Ea&AUOHgWPWJT#Ai$H#/?:H1f~Qk_g8');
define('SECURE_AUTH_KEY',  'eh()1 =3~`(|+Pp{j$bwrK|?g:XCwN2{t)g67=C{!FX7DQUzI;KnPEqk,||U|WWt');
define('LOGGED_IN_KEY',    'S!}|qm|}]Yl<+ibh4(z(Vd,V0sf?P_X75/y(rZ_)5)$Xz2k@pr0|i.a}C ZFKCG}');
define('NONCE_KEY',        'mZ_rBZM&?887D/w|7 #[60`e_bVq8E0v$4E}E+JT0wOqg[^_K#$.Hj5`>#3c*J|}');
define('AUTH_SALT',        '<GAGt3~U;v-1fP+nq@thU5z.+-p~aXB|BHHdT`uu|z+Kq-Sx4(|L^ E5Trs0[M!Q');
define('SECURE_AUTH_SALT', 'Y^Lb>lK*vpaUqNv ~wq935i{Z-|g?XQ/Eu.B9IbK4gVw(XZQL!&j?-.3~6bm,^>k');
define('LOGGED_IN_SALT',   'bt1<+:K+U-q2,LF%so`GpwAb|K[0a}u_fAMHQBc(Ln<oT|>?cq7rJZONZ`,zav=e');
define('NONCE_SALT',       'oh+(#rsE:{AM52Xaz?Z#p+*_o>^#^h]p!lNpejMxIy:=KfZ+x]-kYB5,+5#YyFHo');

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
