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
define( 'DB_NAME', 'portafolio' );

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
define( 'AUTH_KEY',         '+gpw{)~0>wFK/]rBz>~K{*S&th[8[4Lno*~$6^/q8PUS,4ZVMRG}Wk]mF#hr&z:5' );
define( 'SECURE_AUTH_KEY',  's4TZF5H):PfFwkMt.d6 dn$FgsvOG|2$@#L?}</WM#@cmM+`nqOwFA_owG}d>u1o' );
define( 'LOGGED_IN_KEY',    'l~,/]eDU$@DFq$m~8-[^k{,7c_{a*.1L=l?p~aN&$yck)];(*c]1TINp%|MP6_)Y' );
define( 'NONCE_KEY',        ';XWy$Wi S11sedJdG$fdo|}u00[<,f;R/#,db+<jp2<*n#Lu9_hU)CN+g>XQi6 w' );
define( 'AUTH_SALT',        '1WYhn5*z}+hr-2H=Yq<%?zH&mG3[Lu2ko!U_@;],=MGW&!Yw}Rs@CVH,#jy&Ndrq' );
define( 'SECURE_AUTH_SALT', '(@#=t(^%O(a+sT!FpJf}:du.l3[,=vzQv`l&/2{dP/kX}jCPPmPlD!4Jf{PRA*z=' );
define( 'LOGGED_IN_SALT',   '5uKlBn;3Q#.9]@bh@<sJczu=[}7t,/C`y]S(|J6Zbpc66;Sq3<cvECb{Yg!KDS|C' );
define( 'NONCE_SALT',       '0;i>ix}B,~<;!@q&$0woDlwF?y>)kX$jsp.1eS>[;Z:>KOU(`@tnM}w,VC`?~^/H' );

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
