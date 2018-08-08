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
define('DB_NAME', 'salahef');

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

/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'WP_MEMORY_LIMIT', '128M' );
define('AUTH_KEY', '&]{)e&CHcPkb2;wNyX=9[<,fI$2vOtM^du[!n%B!6<oseEjZE`Li2)7WNe#7rK&1');
define('SECURE_AUTH_KEY', 'W0gKR.v~:VB) pd$y=`8OF%TH+B+%i5[AE8k>9ZWgC[P5;Q(6xS%uQI@)#zbUIHK');
define('LOGGED_IN_KEY', 'Q7ZpFd+WjAP)0iPnMeRMx2Vd)-eXdR)fM4A!/D>^j0/iHGTx au@x@5?NqeSessc');
define('NONCE_KEY', '>3pLiwHm|p+#{dT./]GG sJBS!bc-[q~6vx//RH>Mt*-b4lVoZF;zF<c!F1Sy`C5');
define('AUTH_SALT', '`Z3O-VrT@hLNSw6gXsq.Bj/d%ta!Z{iiN9MZdiu=v!qYhjZ%DU5vWD~BKsgj3$SD');
define('SECURE_AUTH_SALT', '>eB914Rim>g.#*i^TUKMmEPtnGS{`#Rd|N7U]O7[F^C8#oE6>]Q$YXhEDrOx,Y[x');
define('LOGGED_IN_SALT', '*20w{kRs_cnVOL{~#<21*-P.0Q@`LjoQrlxyOo:<**M<bTG7`s3RF7j#n_`>c);]');
define('NONCE_SALT', 'iA*o^C?vU9{bU]D+k@8lnC@eQ#sz#wL}`sXiM [zShc.?d^!g,]Y=lh^jw|OEwp`');

/* * #@- */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sf_';

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
//ini_set('display_errors', 'Off');
//ini_set('error_reporting', E_ALL);
//define('WP_DEBUG', false);
//define('WP_DEBUG_DISPLAY', false);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
