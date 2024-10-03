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
define( 'DB_NAME', 'docker' );

/** Database username */
define( 'DB_USER', 'docker' );

/** Database password */
define( 'DB_PASSWORD', 'docker' );

/** Database hostname */
define( 'DB_HOST', 'rs1518-sql' );

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
define( 'AUTH_KEY',          'Ar6P/@vERQ|DpRYlOBOUpe~kVOLqjp]FXz8;#S}*$&Ts@KJa^f!jZ+2TPIn}*~w+' );
define( 'SECURE_AUTH_KEY',   '4EM0.JPU/C2K4Y_M/sB0`Aftu.I/V|xD*D7{-L`](a;# /4pOtz>`<yC,:!AB;{E' );
define( 'LOGGED_IN_KEY',     'N;@Ur7(Cn*?*v.E`qr&mc%rw9xIWk%2dRqm[7zD=Cs {`^U_?+SDbD|j,M6%1sRZ' );
define( 'NONCE_KEY',         'X@ oCnZj1zh}Or O3r^TgNUfn.?+X?TUkIIF[@[[b9:Qs_TMAUNj|+k4/W=I(UHq' );
define( 'AUTH_SALT',         'f:Bc*pyomv8$b~&7n[q]|=5 /;zj36N;7l0cY`%WlJfk)+V4*7SuHAPK k.SqLj!' );
define( 'SECURE_AUTH_SALT',  '74yjl`y7C,jSCa_$X(/+t[XLg+R<tIO>K7KOMFB3R5Bf;Z).[/<T`F+{zA79APyW' );
define( 'LOGGED_IN_SALT',    'D[k7^qTdgU/4J:CyFRCQH0GL}`Du!~Xz}CQ+g].FG2`ZZ1lrK#~-n8h$du[O/~?a' );
define( 'NONCE_SALT',        '!m8Mw2`[5b(6aNJ2dkKy>?Khwfb:2qP?/DJBlY~5tKVw#D-/sF}2bQ,TP|3o2?T:' );
define( 'WP_CACHE_KEY_SALT', 'F?r<NnUMv<E;Cn9T(b=T R8e8<i6q^Ef?3Mk}Qfp$5s$vw0vll]X||jR+epO9NLt' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
ini_set( 'display_errors', 1 );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
