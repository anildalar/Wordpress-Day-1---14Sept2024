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
define( 'DB_NAME', 'wordpress1_db' );

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
define( 'AUTH_KEY',         ',W>%#!pFTWA`8Q`M4Q7%fG4]k#cck|0?I}(wl^35b{C$Xe7txheO-Rig3+, =Af(' );
define( 'SECURE_AUTH_KEY',  'nZCxhb)?ZX`nCu!&S/N#0 iD-fS&MpW5Qr[63F@8Bd+{@bqyk}N%(,!5H`IRIQ|`' );
define( 'LOGGED_IN_KEY',    ',,a?C`3zZ|B?CFh]/+Li<V?@|mk$:BhS0YdU?&`Hdw<K0beG(&&SO0i,:;AeGnjo' );
define( 'NONCE_KEY',        'TW `gSl oaq-- QPYB)F8Ngl2,Kx{T|+8F-`>yF,9;RKzh2|$0n,reOuqV(>]_IX' );
define( 'AUTH_SALT',        'G]^x&]N08??:i(}~(juO*~Y=`tDQ9.@Rmnx`jx<XP6djY~ZwQZL*P5`yI&R3gs?3' );
define( 'SECURE_AUTH_SALT', '2cwI2| Wrr@K]]*3>Qt^%1ek{Hy+LYhc-$%-cegV]TO5A!zd8OyU$oxb`N,x2|KE' );
define( 'LOGGED_IN_SALT',   '8/-Ch$jsY?.`9&20$SayRf(x75>m8F/7VR!Fwf5+PdV%=i)oZwc^A2Rr0L(h?MPA' );
define( 'NONCE_SALT',       '7kv?1UJK+[SXSSN|=Holn.iK/F;.,>vB5!*Y4{j{[k4uBoW_C~1@gu~RBfx/B<!C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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
