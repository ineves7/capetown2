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
define( 'AUTH_KEY',          'W4y+{|! e 6jAa=>SwYI@/x^cDyY,r]:>fQ+Fh]8;`Xm<*6,uN/?p57mtpT6_-Vh' );
define( 'SECURE_AUTH_KEY',   'oV6xF$W3*a%a-m@;X**Pc C:S96I0RX|LlM]<j]vySbF8`DPkNxH Q1OWwVM1=~L' );
define( 'LOGGED_IN_KEY',     'GOy>v*2Y9n:dw*--S&3GwQQYAC-[tn)nwB:^^8)pzqS`8p{D8tsmmXXBSbUj8oaV' );
define( 'NONCE_KEY',         '44bh}Nr9tTn8Ac73t0<Vgyfke>.O-t~(LuM_j0AM14_ N/~AQo^o$UHC()%umMOq' );
define( 'AUTH_SALT',         '.L=cVBC{/pad[yR?HXOV@YhB`qA9AqL7iTCFW5stNheIpuyJI^mL4pSek{-5]=D<' );
define( 'SECURE_AUTH_SALT',  '5c?FKqlr_z!5Q50 HsRWn,f>yjvA(suJDqa(R,H-vU,/mGm,}k{xX[xx*ky-K>km' );
define( 'LOGGED_IN_SALT',    'lzh5LGxo@5HHaF5k`c|y)wt9W(L(j~BLk+Uc+|B33ru_m}v!v-ebX8Zmi2i<1Pn^' );
define( 'NONCE_SALT',        'K}Gtzh<q0vV}g?pUb.lBO+<&{MO`DWhUS9>(1*fnTF%]45FvBq`JjMZpl7&^hsRg' );
define( 'WP_CACHE_KEY_SALT', '=cu w5@~g&;rmPY!&$nMb.5wTG#PR-+18(gdmt{itDnmu?=f&?WpLr 6V~%I{+sq' );


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
