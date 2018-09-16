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
define('DB_NAME', 'rkmorley');

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
define('AUTH_KEY',         'C2o#jY`InE>jKS|_k< >r;F299f$p/fYu]LnCt-r-_uVZs{S`r(z7]%*M5ChYs4j');
define('SECURE_AUTH_KEY',  'cnr#H_%h#Z?1(9Ct|I9u-{v<~S<E[UIeoz vUv;TiAp+3ugq3QJ,:-D, [:}pe.r');
define('LOGGED_IN_KEY',    '* Vd5q3zMs==3BYzZm@merzPsx-e88T<4I9BNQAhaMrb^ZDkm<Q7pi-trKoS&x? ');
define('NONCE_KEY',        '.z%W6LUb5#9.);h82QPx/B-qO <q!,(xqpe2Yn+-m,{*dP<5#S#H~E@D<?5alP-i');
define('AUTH_SALT',        'a~@g2&V/-r4~rM=XtpF6Hq,<DxkDtj2|yr[>:|y;dwi?K,3Uh}U?`>:Y12;C7z?a');
define('SECURE_AUTH_SALT', '7Ms>1a-M=5agXkjTPC~l !yCx~N[.#<Lw[phIvc71`~.zop:1kwf~YN+4#A%V|-p');
define('LOGGED_IN_SALT',   'iK@=bZ!+LQja3s,6ny4<|>_?Ke>%gQ06*T1Y!d0JQhs`+/vz{,UXJGfg[.*[M- m');
define('NONCE_SALT',       'FX[3(aA%3n5A<~p~Zm-M3ab%h$ kxiVGT;4<Om.;zgCT mB*gNVrp[P<.FZnDpN9');

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
