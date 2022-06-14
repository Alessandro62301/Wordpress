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
define( 'AUTH_KEY',         '5o@0#y+~xIgqs-ku7Ctoa-q;*Sxi(~v@s80SxjyASyNb[s6J:AW+{2:@Kn$A?!Kt' );
define( 'SECURE_AUTH_KEY',  'Nck{{h/|gh;3%n3nMs=}E#TQy%O?8U~G+%l$ThLX/Jk^=_(6_5=*fu(L ^yuG!;G' );
define( 'LOGGED_IN_KEY',    'ntCm8@hq9<xo^?KRdY8*1x2n|NM8_2kiUo<LE[86uBwVv=23!hscn79]U7M,OB!+' );
define( 'NONCE_KEY',        'Oe|oEA$oLOPS7&e(g$F|AyhmL&4(jEBzBpYbd=KC~YGdXiKOcs}vH`DqY_e7irI4' );
define( 'AUTH_SALT',        'd^q:2@fSe.hO@t5TDXW#3p-{Vm/D,YPO_22$tUq$rR,bJ79Yogw)m*&al|jg1-_p' );
define( 'SECURE_AUTH_SALT', 'Z??gQ`o]?=$vyVdXi6J0[)8FhaNQIhA/R&0zPlf0d97y!0IG>]#F;Q1m!3h?LfY~' );
define( 'LOGGED_IN_SALT',   '7`$!iKQY{{PXYd|]gGSWkb!I-hEcxrik=sH<Pvv76MjnlOXCy%z u1b.IR/?~#W#' );
define( 'NONCE_SALT',       '?!~v{$!mvL)f+<[:tNM)v/RJ9U#CHP{nNu=j&Ia$N%>.9([b&+yf!Y;by-yTaqrL' );

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
