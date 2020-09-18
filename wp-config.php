<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ocwq}<j. Jo a{G!w2_ItS^Lr&<{Hr{BT36l2?,^f~2Nsg^;nV^qqQ.*9Nnpik`D' );
define( 'SECURE_AUTH_KEY',  '.L@vuE*I%Pn3h<=s_&l*F:Cd)/Xc$.Bvg^h_.aD4rcYVnpqzuC%BG;h]FC1WBb}L' );
define( 'LOGGED_IN_KEY',    'T!{Yz[3j)+.9mjF7C0FRk`HwgTAbCG25tWoYWF[e5Mf D=JF`HW[#[|6a9ZQR_ek' );
define( 'NONCE_KEY',        '~nR/G//^YsQgWZPU<:{R}c6[cCHaXjjWX>tR5BWIznp`%LI]dH{#f=W|wftRt8Gw' );
define( 'AUTH_SALT',        ']jT(}CayIWONXfPXw4k2?kId%8hM:b) /]~Enu< y?a6eOZv$Yq+F,tF1gn^a*>t' );
define( 'SECURE_AUTH_SALT', '+l,e1RzSm]WWtAuwNfp),VK#6bCN}j8_mShBtgw6vQ,m1ZyoFgBL2*vF(#u=I0e+' );
define( 'LOGGED_IN_SALT',   '(p>,25%7jlD 9p =Fbbs$MPBsxp&zy#ubwBO.{WS>@t,H7&F{qU{UswU8vq&=dS;' );
define( 'NONCE_SALT',       '$ G;`+9&^N^-eQoWf$@GUuV21y!uJ=t&j2E,D}m$I{=FJab:$4+a0U1N1;D ;Z:m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
