<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YKi}G3I>s]atVy?E7SZ{%G$5yGLg7|xNfoU-IP-d-lyy2}JK4>,3SXwFR$LQ=$FX');
define('SECURE_AUTH_KEY',  'o x32H2_JTq0k}Pc%-35U5_;VBGR//|A,QLq0k~5-0)G<)VNa4w|T+8QuD6F;~2d');
define('LOGGED_IN_KEY',    'G#zZL[jH:F-$Cx38|q1@8RY=+=C*lv4@sXG=C`3^UvA6-- !rOw:kL[m-:3x[/*4');
define('NONCE_KEY',        '+$xJ.(6~Wa77R,M#v*~;Q_H^JQicKYY{EB-OM4Y= }++IQX9)Q-WMdc*|knyowP@');
define('AUTH_SALT',        'WWGp->}h|3<.$TjZZ_zRM2 SFV/)}s<aNdD,rj7,686JBrieJWC+A7*toPYy0%&7');
define('SECURE_AUTH_SALT', '0+Vv`PtH,_c50X}K5O#EE3Gy8PlkI-~9,AY-`N+|Tm}7U](E!<gy2{n-9|cv>NHq');
define('LOGGED_IN_SALT',   ',|1U?Ui7eHnG-XR /OH|-@6oQW}0P_,y7}I.|~3}.X-VP$]3HqC35~*jWtwriFF[');
define('NONCE_SALT',       '*ES4N[|i-JKuj(|y1myFz2R-w72gr7IN0G:yg`y`>|?n.w8Is}*->BbmpM$LzLH/');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('WP_ALLOW_REPAIR', true);
