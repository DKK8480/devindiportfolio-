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
define( 'DB_NAME', 'devindiportfolio_db' );

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
define( 'AUTH_KEY',         '=oA7Gyv.jt)Dpk1,Z$eOe[(wzsjq0D{8&/|U9aAlNM3}b`(*>/qVJ `EtG0z{o1_' );
define( 'SECURE_AUTH_KEY',  'b|U{>2vW+dBEr?!$#1>:5Af|k%*~B5Zwq`to@QL}Y(4/(70[L6CqzBUTN4O.cEbk' );
define( 'LOGGED_IN_KEY',    ',+5o2K-]18:SC:A4+R8;{]t&(s-l{/<m]8(2`wsr4L8S`|mc/.u`=3GTa`{aq)HJ' );
define( 'NONCE_KEY',        'AAlv<UBTi:Dw5J$k.0r6tW}2F-(R+NxN /4hf1zBkO4uJ.A4/21JuR_9L;|@,pmg' );
define( 'AUTH_SALT',        'Upj7ciH[8K`(Vlt|DKoK{K~DAn?y;9Adf;RT;*MG^%x6V?9(2~O*|d{1A89!>6]q' );
define( 'SECURE_AUTH_SALT', 'oq@Zx3~Wmt9GGKpSW+fxJ{?y aBQu*Kj#QXGz|+gKelp)JAOCOg9XVhp)6@{XtsL' );
define( 'LOGGED_IN_SALT',   '4jlp`<4Ev/J}X#54]?.MNh!Zc~_sQj)w05?A*=dWaxy=A54V&.K[+tyS`CJ JXH/' );
define( 'NONCE_SALT',       'FX0YZC&^9m|LJ>D;@V8(5Ecd^jx@U6QB!M!d7-;RB4>6`wE8Dv-opDJS6{~|(L@O' );

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
