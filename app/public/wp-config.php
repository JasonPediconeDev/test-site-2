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
define( 'AUTH_KEY',          'tZlo7}TYP0 _v9WvJo2z,vu|ah0J$zmrcm0j?K?50`u1gf2R+8^[Xy$`D;V0xb:}' );
define( 'SECURE_AUTH_KEY',   '*ODP9{&5QP+!;Hx6v[YIYd(yY.5vKbEUy3Elxe1[%%AnD+h,v{{8pGO_<^5%O*o%' );
define( 'LOGGED_IN_KEY',     'g>uR/2K`L 3t!qlS*~b&,]wn9>E~Q{2GE!)hh7BrUIRy~PMlQ_c[U%$Lq`%>Ek^#' );
define( 'NONCE_KEY',         'gy1*]1IjatA~%O3n.TG75vehlGrZg8#}v/.W,5:#2m/h_5VBXM7p8P^7U&=:(M,4' );
define( 'AUTH_SALT',         '?zQLk-iEw_y{=4>u_u{8WHrlS<Lt~k6dL)S|<gNKOTAGTf4)P1o9)?T1>rK[QOSw' );
define( 'SECURE_AUTH_SALT',  'ykeO81y*2hX9,I*iTj^p=nft]h[aG/=&14u[]m$p1$DeOY{)PmeKQl?/Gy8YXsNe' );
define( 'LOGGED_IN_SALT',    'fYY*;PM_br7Jv`-|^%.@%6N/aY:ob7;$T?Y>Cq|Cwq4)TFl3chSh9@iD49Cybroo' );
define( 'NONCE_SALT',        '~ogMx)5~P0c)h=nDjmP>2@Wa:=ku=y*;^L1IKOBb+d&]?8d1yTU?}LEIt2^h_@?x' );
define( 'WP_CACHE_KEY_SALT', '7d(+4nKs>3>kx3^Vt$Y3POJI%!IBWfL-t*[P{$fw`kspr]GF7;7x8rH;iJiYIQPy' );


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
define( 'WP_DEBUG', true);
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true);

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
