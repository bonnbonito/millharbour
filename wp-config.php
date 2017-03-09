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
define('DB_NAME', 'milharbour');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         'HjYarWYbgus HzJ;)1LQ1Y thM>0oF{Y-z#W.7e~w=dz7$Zv@]`XT<w)QN L}^*(');
define('SECURE_AUTH_KEY',  '=2@/+E*2gJ$(Bc;]VBcoLxw7w4;MD:vX*X6&]#{(M;|;N58@l;OA,[D*nMT*EydK');
define('LOGGED_IN_KEY',    'BRr/dv0aF<Mah=nE:3[Ka,aT)fd8t{bCkO9)jd#LZD:v*?9IZ5A,+}q:`l8svOZL');
define('NONCE_KEY',        'xe?up(1L=&Z]KX_VFY&oV0YKOLvoLTQJL|}?E~4+Effi0~lT]/N/wYMt%tkBpC?m');
define('AUTH_SALT',        'mqk (Q}NOGW+jJVR-YPp,9O;x3RWrI((Xpr=Nxk~]gRZT1oSwiz-7oSN{&B}&zy~');
define('SECURE_AUTH_SALT', '&N:cXT&7.d_~l_/.Tk%>]o&(Acj`[%xDHydPL}1+x=[L<~Y7eir2;MJ5hauN2@ZF');
define('LOGGED_IN_SALT',   'CyJE6SKMW,pFi[~+Q-Uh2e(f2IBbUaOA%h5`>|*DGY)6y$C9QYt26*K!D1NJ| %T');
define('NONCE_SALT',       'lv7h#Vm6L=}/KmCAT!|(?FV(?*/FPnZl;2d{t>avxHc(JY=D)&o(.VwgBRaqt`{m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mh_';

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
