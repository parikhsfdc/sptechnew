<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'test@123' );

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
define( 'AUTH_KEY',         'Fp}-fbkm^c^-SOM&N?_s8mSHB1QP452z+*N[]*!8#!Wl+va9<~sy),y=A4f[MZ*#' );
define( 'SECURE_AUTH_KEY',  'kDbimn1j`1G# N&Fn_#l*eBt.{,#4V7b4>i)rGyKb?Qafu8ybVSt0t(V8X6;n*jg' );
define( 'LOGGED_IN_KEY',    'QL}UoUxA0 7@nH`j[:1[P1k%[0#,-MRfKnHl=8u,|#ixqQ#EYWKq2eXNA8/@f}7$' );
define( 'NONCE_KEY',        'TNpsQL[0aUYePJ0D|pIm>:Fp5ud}Nu$jmo?6<^b=0/4<`KJjK#5RWY=(|eB](Y(.' );
define( 'AUTH_SALT',        '@V|XWR=HP<P^.ugb?sqzhdTe/^n6 >R<NicC; VSB&/[v/mv_s@5*`6%V)2)N?k<' );
define( 'SECURE_AUTH_SALT', 'X}6d)_@ aYPOd>3H-X I?i2D dCC!|2=cW4qnY=a5|*3E.r9T:g/e#|7QFD%&#]X' );
define( 'LOGGED_IN_SALT',   'eMVk`&$W:xI9)s|6HYBiXTii.BF+m7Hff?lf)t#q[oAp0$blh<[1gmWI2bC(N[{:' );
define( 'NONCE_SALT',       'u0/C#JVsdmKqeiV6cTm( #c.~R$O-NrR)Ppc1MDF X;XcQ!-M(&;h-|95Oe3bg4j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
define('FS_METHOD', 'direct');


