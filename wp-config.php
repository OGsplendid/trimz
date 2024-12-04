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
define( 'AUTH_KEY',          'e<#%;?sQTAiVrJ45]b}A%S~c}jk]vNzSVme(4{s/t,=8-QLGdok^&V0>cG8trWm8' );
define( 'SECURE_AUTH_KEY',   'OAVDtNPsB?GZ5t)3EM6= EBV&B?VoRQ4n9>0|#Nq@1,&HMW}&cY1Jvte@LiINX<V' );
define( 'LOGGED_IN_KEY',     'R<$,T<>{SP6U*.,<I_S%bY|hshFsHah5p$L(,FM9qoc?xrz,_UfMcUkw@hDi_Da@' );
define( 'NONCE_KEY',         'Lv*DW&Vw8D6arP|gfnqw=t2rx~p=sVK<?*0WG#xSP]$)`2e;>m]Ph2pTf3CTcuFr' );
define( 'AUTH_SALT',         'J=&vxn`!o^dZyH)?pP#_@@;dpbkE?4^{e%=,WnxrY!Gzt7O:u`2 r7e>GAz1cc9n' );
define( 'SECURE_AUTH_SALT',  'V}S0cEZbPg.MHk8?s*E*a<YmVxrwt9G[#dO_#4pt`sCGs ]B|>:Q-0os[Jy7!@2 ' );
define( 'LOGGED_IN_SALT',    '0HrgPx`Dum7^z*{P61?7Gb?($0|w{:|r4lBj |P*c{}I/001;44u%W2TfKH pz8O' );
define( 'NONCE_SALT',        '|-X6G{}zJj1<Pa2.5r-x$.u]+ tK$XhFs)0]iK}mTM0-^9`?eO}w|CQDcID??d>s' );
define( 'WP_CACHE_KEY_SALT', 'TOgTj;@6}j_h[i(^Lk>K!zMT~cd~R]DPz Y6|wP/@r?oWd;hVjRM_W,bn}*J4+_X' );


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
