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
define( 'DB_NAME', 'u441189354_NR2cR' );

/** Database username */
define( 'DB_USER', 'u441189354_A3UBY' );

/** Database password */
define( 'DB_PASSWORD', 'dneIL9biYw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ':-6[).O<D0hT/ #s:<i1!1&lDK N_48on&,h>u8:~SGP)A#{d3(?dvR8{Eqdjkt9' );
define( 'SECURE_AUTH_KEY',   '[;.@l7%/0D,@<,?#nWNt%l0cip)7GN6%nl}uw15[h;<FifXvqEea(7!SqxxP@%^T' );
define( 'LOGGED_IN_KEY',     'm}^yf&v7]A?]4Af8m5FNfzlag-9BDYHZ}B%5(*(~(5n/S2KVQNV~NtCDd&,<]a%0' );
define( 'NONCE_KEY',         'JIe@[soQy,w|a$hFA+Q <y*@|bk-b{L`iO}Z(NOR}z?g4/T>.s`E_Lr*oM=J%=<>' );
define( 'AUTH_SALT',         'a X6Pu,-%sK0S~pe|@1^Xwup!}Q~x0K$m^qOR68^32J%^<3AUI=>C_7yfi+wv+As' );
define( 'SECURE_AUTH_SALT',  'z4Y)cRDm%TvAJ2?l>l)*7D,{KOsWC=+m*{QYWED378lj6{Cv&I;H8BSj]ZWSfK^C' );
define( 'LOGGED_IN_SALT',    'h-H;IFsT1Jhi9K)YyZI0^_%4>bh{ixNu@pa5Dv+L541V~SG!Ei^mz_R(g2+X5`>Y' );
define( 'NONCE_SALT',        'BuSiX@nT,xq{Bej-@-RZom:Hht0j=L/w4GCytM)R4VyDP1_b9+K8BIes HT>PZl=' );
define( 'WP_CACHE_KEY_SALT', 'i]WfL$ff7?%|5:e|Chrz4$Y1x#z:b^_<qpn1kOKo,b3/Q=K3`/)(ybioiF6o|1fZ' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
