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
define('DB_NAME', 'sylviamorilla');

/** MySQL database username */
define('DB_USER', 'sylviamorilla');

/** MySQL database password */
define('DB_PASSWORD', 'Sylvia1234*');

/** MySQL hostname */
define('DB_HOST', 'sylviamorilla.mysql.dbaas.com.br');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'X41`lQ#`,[<Y?oB/ah;{X.[bt5O!^OF0a<-U)^65Q@64a/HDMO0=-tG7Kln_^}LC');
define('SECURE_AUTH_KEY',  'PVu^~Bc|<_Ttj9=_eP[t#thcO>O/B&^GU JH`5#HmZ!`zu#jh| 8R|u/.MD@-8eh');
define('LOGGED_IN_KEY',    '__$/>@R=Ya_  ce-W.`JUh@~U~2$Q@Wk$]u0nhNt{lc(N%$$8I@j@jyMQ* /3x1&');
define('NONCE_KEY',        '?A}yk,{Ig 2/(sPEPIV!PDrICd+)]R/SsLjiBuk`0Z|*WUd8AvEj&g:_^zif)j.&');
define('AUTH_SALT',        's6ak<Z|5S0gB| g[Q< m%:`d~r}YtFsDO_Mr-BMWgZ0oMD%O?a=7Rv~||*-;&Ki]');
define('SECURE_AUTH_SALT', 'Y^jat!V[^]jFr~dpbJ59`q*wMJ(lQ1F< [:Mt:_w*WmrIMZc(PA(1,4Z2LXkUr@u');
define('LOGGED_IN_SALT',   '9eqmeiJ!xs=KKKPon&]83W>mr9|I.c63-Z(O7`$8~`0!<A=<W (Wz2pW(DBqq/l^');
define('NONCE_SALT',       '`w|bd1Qb>rcgYo6T+pCsRD@ U27%0bZ6kyt+PPd/QEej_9!66aB$@#adO!hU.~cG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sm_';

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
