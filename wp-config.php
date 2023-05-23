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
define( 'DB_NAME', 'ecm' );

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
define( 'AUTH_KEY',         'Y~lcxdyS.dRVbEE*ON3@yMsMNSk0J)#^l#JD~}tPHVEF~yEm:%!BQ.m.Kdt4x%|.' );
define( 'SECURE_AUTH_KEY',  'Fj*_~%qf)AW%%z!Y(5V=!3ape,EjXO7}~,,5iRMPM}>-mz0*n,p{iSK)(cua9)Fa' );
define( 'LOGGED_IN_KEY',    'X~U*L,aEm@7+y-rHk04PQ+(F`WqIh0GvX%r8<dJ!a)ZZi6h%3$N<u6xX0HR]Kz+2' );
define( 'NONCE_KEY',        'IDs#;S`$G4$&4-xamc.*:eJv:IL^M,J fjeUos*uZOJg%l#Lanb=yxuZ ,wqth4J' );
define( 'AUTH_SALT',        'qe,>d177P{mY/}JITgwee*jv}A]XcKDioO$$:f ,MoY0o<g=E9U-=FUfMYuvb:oR' );
define( 'SECURE_AUTH_SALT', 'zNZ~Il@H0knD%d]3rxK2YLI@W!fTYZ/L|!fFW0%!&DW}5,<4|3pJR8606&=_nX9.' );
define( 'LOGGED_IN_SALT',   '@)<AASsNRtIh`:e2.*R:TEJe!0,*Nl.WBF=B,Kba!(}V lA9dI4@c_;`oPf9b=KZ' );
define( 'NONCE_SALT',       'AC+EVq#^eb:/<F?QM`yWLGTTWruYR3TNACxeg;y*`xRC>YZd}tBzXMX1ioRJ#lY<' );

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
