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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\Digital\Local Sites\wimbu\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          'O@`x{Af}2E.|sh~W1CoJ-1+vgYQuCw4!QwTTb(~F=y@Al8P*I=8/d,3&H&;xWrrz' );
define( 'SECURE_AUTH_KEY',   'Q?.I!d/^kQ3RM#EoB>bZm E*q0J&#i6z^[28%AZC(-UE[ qP^P6bCFz]jTS=|Z5P' );
define( 'LOGGED_IN_KEY',     '/!s`75g*<* IE.=j?2=em eR8yP@]PU{#W=6uD,b3o)pC|1E0diUG}nCkK0tcZ:0' );
define( 'NONCE_KEY',         'Z?W/a5nBEtF</J/kL%pLRW^YdU:TYewtOUi*BX_p7j5Q^bgrMsy6-/5]xS5$T;<F' );
define( 'AUTH_SALT',         'YMr.PP@I^2_pO_gZ1c2EQVuJgqM[L?^W`&jH52m$S~SFpCLdaY8qExZf:F%$%Nm1' );
define( 'SECURE_AUTH_SALT',  'yqyTHpjiGwDh4xf@^p!T/ix$dFQ-wJj~afqXt-YT3$EC>)S/9NnO,R[(rir!#ie*' );
define( 'LOGGED_IN_SALT',    '6]Hre.Y>trs6>>z;PA-J*H<2[)GfNG.@Vh.hYDFdyV|g:zj22BdHq]2ck#P%Vo_x' );
define( 'NONCE_SALT',        'T1=8Y}ca4G^O.<J%s`AniR( 8PCGeNbn0@Xxivw|E[k%Q(sKtmcjrmPvjso/{8=_' );
define( 'WP_CACHE_KEY_SALT', '7p1n/.YQ`%4;AM@Lso=5&RTM/%C7KM95UCS3!B F)B~qY|=n^spE$Kw8kv7$u@)?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_MEMORY_LIMIT', '1024M' );



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
