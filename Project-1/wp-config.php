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
define('DB_NAME', 'project-1');

/** MySQL database username */
define('DB_USER', 'shadman');

/** MySQL database password */
define('DB_PASSWORD', 'sadman@174');

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
define('AUTH_KEY',         'yzu9mfZ@t!Gn&B!4V/d&F.RgOc>vQe,Lo+~9CiFMD%7wW`6B4I8VEQJxa?9,9W_u');
define('SECURE_AUTH_KEY',  'RbH4CD[wgpg,nIl?Ay2A(t<M]J#<LI&IVgpH@y-kE0tT%^.]OOBg*k$Q%_5@SNL9');
define('LOGGED_IN_KEY',    '.D`M0F~2[Cxj,%q?C~8.$?S-KC%t1PfK!uOxok%klL2*B|RNS|3^lq9+S{K5S@Rg');
define('NONCE_KEY',        'IBo#mnF;~TwJ/~DtYud2m|:c3lt&!/{K?*@RvMUIv/dfeh/VQy}dRu@81]h)Bt8p');
define('AUTH_SALT',        'YeRo<=ur,iO/CyOlp/GGmwe3+REU_zM)/K(Ey2k(W[nYsM:_g~b}_8Y{6bnguC2D');
define('SECURE_AUTH_SALT', 's@<d>K!p7kcSU/7Ab4W1*_w_U;4KXk-p<eM]_m3`qrVY@SBzp/0A&y.G2,HAWn^X');
define('LOGGED_IN_SALT',   '?Q2xZwf.zNSm;u%eSJQICogfUS`7|55gTcgxm o|,RPM_4kF!]~P_2q^>6u/GT~K');
define('NONCE_SALT',       'SxKt#E%<mh,-duA[*kW}*<lN?MIZ5*DsNNM4}>CUy2Rx|lt6ZAl(AeC/TMd )%$q');

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
