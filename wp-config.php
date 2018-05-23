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
define('DB_NAME', 'roccabuy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Thomas01');

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
define('AUTH_KEY',         '_07Jc~Mc[ddh.U-smWIEP&A<4?2ml%%V_1FoH>1P6N,C.u/&1U~8Cpne7V;VOo5{');
define('SECURE_AUTH_KEY',  'b`l7Q)D)hYW_A&)(21{?${9mv&n<ux$9O!%0KO:PJ=P)U*vm`-<slrz5O+5H%cne');
define('LOGGED_IN_KEY',    'sA=#eeC{vDlHI2M5qs8|7s0QO.*-{u&S:`f4pD%mfs$F}?Uh4*u(jgdty=#[&KXt');
define('NONCE_KEY',        ':qTzYs.l0m;j8^|M~@Hi RwEnayBU^`}>;r*`@|  =hq=%NC@~PnE1~_uRNMng5/');
define('AUTH_SALT',        'F<~Z^N3kOchevp9+z]%Doo=4q659j1emL74r5I4DP!_Evb$uDx/m{4%UeaW~webu');
define('SECURE_AUTH_SALT', '()jk98I#1~<wbR39QmV<(1#@(:ml<;:D1{KS!TJ.XflQN}]c6vE*j>k!h?|cBW{ ');
define('LOGGED_IN_SALT',   '0Zrwx)O_C@=EU?}(eo/x/bhpg,E,dB 4o,nx^[ y?yyeI+SZSy,ufCy C]$p~GQl');
define('NONCE_SALT',       '^`q8H/f`!pfgp+;k9(x[g`ezxy79#.Y&|Y5N9XoZ]iUv;+^8Wc=*G>]2:6# #T@7');

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
