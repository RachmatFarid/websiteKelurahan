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
define( 'DB_NAME', 'kelurahanpulau' );

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
define( 'AUTH_KEY',         'ST[*VdjR2-!(t?Hte]Pfnz8V7PL}XduuR: ]Hlj:.E#&G[+xYU;QmOY_c1wBwteq' );
define( 'SECURE_AUTH_KEY',  '5?vUs]]g83_N}T]Wjd&shFl0+{hvk+{F1UVy^g*_siR2dh5=;jgJ<1^.^8Bqa*pL' );
define( 'LOGGED_IN_KEY',    '.Q_@Bfsl?TStx=eQ`+:^x}d0z%(rcKgT6,`[T8*?g<$viE,045FSG/k45u3$dm;=' );
define( 'NONCE_KEY',        'pF7Zm~[53^pe0~n8QE%<CuT3LcV|v(ynwc td?6>B5CU&TgvGYXh1G81aO7_kW/]' );
define( 'AUTH_SALT',        ';,a0pJ~AyjT]9@A #vM(VqC7b~MpA(>BYx.CB|l2XambgD!z`GpFc@,5Zj`ES3VS' );
define( 'SECURE_AUTH_SALT', 'fk$y(<?sAH!Xp6FR &RMIdq_G8Y*]/QT:OwpI0vqN2chCoLhrC%Jf:m(qr6fDT.P' );
define( 'LOGGED_IN_SALT',   '_znA6Q!B[Mk3!D&jIks{Wa]7AAE$|cR;Kg]]IJD@_M2M{_gr9JV%mW_y#.{=m>W.' );
define( 'NONCE_SALT',       ' 70y?_69^U-cD9oo.d?gs+;}tR]Iz/_NdyOQLZf/}RW<)@m0nG_,&2TBaf>uNO@!' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
