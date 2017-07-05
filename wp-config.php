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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12344321');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3&@j{jV^1<|@Y0Vos`5NvFhX@|~v^Y*#<26PAp)!nxRxdlXrm-UY<3MtT-my<,CW');
define('SECURE_AUTH_KEY',  'Np~X,FWvvJkaR1?=xXTS ,Ly?!BImSM*FgAJ=o3=9^){kV^h|V]3sH!>CDlCE3,3');
define('LOGGED_IN_KEY',    ']e_cP2rqX2}#JAUP?fZv=-jKv!VVvMavui~V/VLi7KTt9,Gt1|Dm;kEYaEsEPm=Q');
define('NONCE_KEY',        '!Udyu<VbQ]LU*gzIMG;#h-u1=@h[o(x/pAKhoHm0.YRqVT*0H5{nJ{0o|z](DZve');
define('AUTH_SALT',        'oMvZ0vjN6,(WH&D06momgt(xDdfK,`E!9X0zAuWV;u4&)rhtLm{Zi)00WW*mZ kw');
define('SECURE_AUTH_SALT', 'eQYpt7H?N]bS3EAmH.J}vR]<,DDke|GUbm_-+~o1C;:K@Y- ]&Ms>xf!#n>{RYAG');
define('LOGGED_IN_SALT',   'ON1]e*E,sIub;a0P;XrSqkmv:CjQxez9WzjLCM9:(9e2<;vBA!2hi<=S5`OyWLRa');
define('NONCE_SALT',       '0-I9wnMK NBF4DW@0ZHF6i@Fyk_(5ocNl7Ek#ZGUy|UYP)@][;^/n :C~YRc;Hno');

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
