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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-server' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'pQWhTzD_2x8mppc#6}iYm7y2GN<Go>>DaA2g)6RtF7g%~pc YmCp;lH;7~(;;_,c' );
define( 'SECURE_AUTH_KEY',  '3=YJ1_+{wl@(]9qHvo#6:Xd_`/P/-T3?{u>!w_,D>-Yv]:E7,b)Uy=;`Nrst/F9a' );
define( 'LOGGED_IN_KEY',    'JY3e$ZD)d}bc_`>ozF`_8gU,o1)MKbc1hL<9}L3Svow|;Z%[1.P`NZmg~,<%~QAH' );
define( 'NONCE_KEY',        '11RCPe^pnGA5z4xWcwZ-Lme:#I;%^-NM6YX.r&e?2stt?^g]8g&rk!2S:zaqe9r+' );
define( 'AUTH_SALT',        '$e1TGUtv3NC]mbfFSw.se@NRbXQhX+>.6ayn]Y:tBvjKgB7JPUnmL!Blcm)kHvk7' );
define( 'SECURE_AUTH_SALT', '#=8m?A}X[,0DF} c>Vid{xN+:GRFP?Z[IKU~WK}%lFg9[g9I3s3:,;EZ$I_xb` W' );
define( 'LOGGED_IN_SALT',   'ZaUm< X@][n/kT,AsL{`REsWcG(y.>63V{|Wz%AN-I^s0+c!Hc4z% X~7Gg|ysEd' );
define( 'NONCE_SALT',       ')t_B.k<<s8)KmesNxR0<M ~M2=M5wN{Km5g$UE}{;REw&eja/_sYd}WhGr7eaI|D' );

define('JWT_AUTH_SECRET_KEY', 'P?d:{WP5$_J5-<[+3z-Pp{BblvsA![~zSdX f#/};*A>Xlz.-R0L?8hBgZ,`FL<Q');
define('JWT_AUTH_CORS_ENABLE', true);

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
