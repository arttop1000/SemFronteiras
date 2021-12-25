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
define( 'DB_NAME', 'consultoriokarla' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'yRinhh{_G>,Zs8&>/l$lQc:+~rgJ!~9lQxO,]-Gd}eB](1retP~NPaS+/FwC;.O]' );
define( 'SECURE_AUTH_KEY',  '.3cs!p}6kF2x9]<TrYW%]hvy=*O|:3M_{GA,RgDnD1`&^e=[]z@P/X-Fy5x*lo(@' );
define( 'LOGGED_IN_KEY',    '?{DMf.A6BmZCSe*atu:8~iTvws@}/:)uJoe?},<Ct<ToLRda2XlftD2qas`NHL N' );
define( 'NONCE_KEY',        ' s;*(Tk{R<WxuCy<gtHO~O};EuN0/r2D/M}C--&T#jS(/Q~:a>_7!4WN(kfk!@FM' );
define( 'AUTH_SALT',        't0ptE5u1 y/I`R_`BmwLvPo.`]Llf2Rn~4P{^$uNqUoy(#o0~gACj]w(Dy>Ip+d;' );
define( 'SECURE_AUTH_SALT', 'Zl7ac7j!/]7B? D^b80X0.6VNhOwYs4Vu,Wmg6jXY*/oK *^}*7qH6zh>M6,=aKx' );
define( 'LOGGED_IN_SALT',   '?0_^0-o+q(^HZ[;LOfg;YYYL-/Lvg)CgA3~+mL[PAL=3$Sf/=~T2#@G^>,3g&O{Y' );
define( 'NONCE_SALT',       'V{7~3Wp,0n{K>;jS?i]1 lm Te+pnO)d1l#h^;&i<D,pY21ydc%mAx!{<Wk-?vH1' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
