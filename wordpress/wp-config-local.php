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
define('AUTH_KEY',         '( Ncj?6XcK=h!2Pzn)dvBX0)nu4v]^:m2H2{FHwX)aVUd[Xff%V%pgGqsgRa:z]$');
define('SECURE_AUTH_KEY',  '7c8_J=5KfN=DT6}oC8uHF>Gi/kklOVIxjS4E)#6gx]B~Isinj?!7XcQgL)SXA%_R');
define('LOGGED_IN_KEY',    'boC{lQMQlaPn0PGjqOnCQFaqL?}b$bp$=yJUn(#JsAsMvTl2(1y;w3:vAKF`vq>C');
define('NONCE_KEY',        '=1H}dVg%xb/qy`Sb$4cYt9:7Z%2Ay-kg>Ad>4@YTN4pIaclt=P({v,hta78HX3wZ');
define('AUTH_SALT',        'c^3CGbEPX@GXI2CCg>g9~{)>z{X2WFj[jHCl=qW@0?7v9~D0_*;-OR#FT^O<(.5V');
define('SECURE_AUTH_SALT', 'yW*o*MO5N%]bL_+]iUu/Gs:6UF_c~m?kIV%52xdPeu /?h_5ejo?sp5WPW9jQ#`F');
define('LOGGED_IN_SALT',   '2n>p:n%u#Q8w7Kna74LG<T9dDudkiOcK~!?I`76eTM,DIo((oD6NgAlWz?Q93*v ');
define('NONCE_SALT',       '{)aDmF&A,k/cs$ZMN1x=FaGC+u.D5i){&=*2P+hQS2RcqeXp.PBUC,T/a~aXYgit');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
