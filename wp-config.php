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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '2kf(N_/yW vO6=~`*!k?e3KdF{%wL8R39Jw)B`_2v/snLX,|Y+PRIMj5$9oi.3Lf' );
define( 'SECURE_AUTH_KEY',   '_S4sHJH+J,[#_gz1EP L7e:)q]1sWO+[1tB>pi9BaG[9RF<Y*q=aYWLru51^{_m9' );
define( 'LOGGED_IN_KEY',     '_3(D/|,Ty&OFrE,C(_B_Sa/~>KZ?g23bW4EIn4=+L PveA*sPw:SmTM(#u:+D24q' );
define( 'NONCE_KEY',         'DPhq/bb]Cr}%rCFrM!S`Qf~`<V?mTZ:?L/(t@g{>0yuc`q5(Md <)gOu#QpSRV)w' );
define( 'AUTH_SALT',         'E089p92@ 0K$1= [pG:a|C(}@s&>S|I:H|8,U]:9{hpf##_Obwvm=D_nNoWHd!nf' );
define( 'SECURE_AUTH_SALT',  'P2po6NK*_IY)xxT&[d~Eowbym`L>D<9X/io/-Z:)XEvoS|d@I{IjSWY88)U8%UWI' );
define( 'LOGGED_IN_SALT',    ' {.bMbC*6L8-yK5z=^lMw[T^nhfpvB9Z4z`a>lfkZ]DK8>(fT:Fo#`h!,SRd.a2[' );
define( 'NONCE_SALT',        '6k{a/?NI^wZnBbq_6SfJ6`*ZcQ)I=w2p9&]u)D7;xz_/&pbm L6i(k8 :PUqk<a=' );
define( 'WP_CACHE_KEY_SALT', 'Z+ i[Ha!b|8F?{M@W?ZMLRKK{gA^O.a6luG/p)]s4Xy`e.uPl~{R>y,m;B+&4]KV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
