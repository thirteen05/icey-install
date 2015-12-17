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
define('DB_NAME', 'iceberg');

/** MySQL database username */
define('DB_USER', 'jdarrohn');

/** MySQL database password */
define('DB_PASSWORD', 'Benny963.');

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
define('AUTH_KEY',         '4?x<|k!5mJFc?8Zo(*hJii02-XC.{`^d[>SsJ7eaLsE=b[i|8j/-+>6plM<(/b(_');
define('SECURE_AUTH_KEY',  'FPZa|hI;s<?8<}HKl-8,-5Pg=d)gx6m|3S;sLT|h~fkB~uu0-ksMb(-S~=y.mahn');
define('LOGGED_IN_KEY',    '7tc4ny=+1.yGKBnJiqRxa+WG+Yi^,oJ*Q1,s6Li<]SsiEq`0b/LyW5X1w1- ECp;');
define('NONCE_KEY',        '2kH#+/vjzHm~!W~-np4)r~#+@Lc=svo);`{8O-SZ*&n%BG=<nYE9?u)z?|U]?ZO+');
define('AUTH_SALT',        '#c[:-p^Hs2 JHWyu1-| kQk<8 nS{W,_h+o}w-D7p:WbzrG832J/CX[6_ab6nU`J');
define('SECURE_AUTH_SALT', 'HF|xhZCjX3&x| YPM1]8JLH K_iv#l)m%s!+Rud$PF=q->N>@+kq6kCp.t2a68gW');
define('LOGGED_IN_SALT',   '@I8O2dknPlp[EGrVD@xmeU47Q_kME8jUQiSHlk543!~[/oB3gNH]T5{|:+<QO?-q');
define('NONCE_SALT',       'pC-s$t5s [(;aE>BP~kQH@P]5mSRQDAi,@i,6sYVzV(T>MV)j-QE*|C`CcYPYtzH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ib_';

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
