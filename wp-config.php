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
define( 'DB_NAME', 'netlifyweb-2' );

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
define( 'AUTH_KEY',         '|_y^9&I<gHOSMMOqg:rIh6@J.v8e(q,DY!hMO?}=}KBx1m4:. Q3J_A4f@bM#NXj' );
define( 'SECURE_AUTH_KEY',  '6# }]UDQB_>P.[kMey kEs$?6[,&-Nwc1UDLJirWrQR0]7C7={b*D8fZ~er^SjtS' );
define( 'LOGGED_IN_KEY',    '&V~AAfP|/2/9#E*5(lPy^W/W7SM=Ft7%4dDw1;a=ME+mlP6{?/9W=t|af84R2Rb<' );
define( 'NONCE_KEY',        'D([kEp2 Kuz&Vjs(:])/?iP7v*u-BJ9&C7$pD,bfQY#/ipKL`:Bx8p;F~p78E~*r' );
define( 'AUTH_SALT',        'Qb(}!54)E4w=!p0sReX!([i1S_^6(p2h}Y!UB^%@H]G06*We=nV+!ijD&~/r=vD6' );
define( 'SECURE_AUTH_SALT', ' %S^s&{e}fs7!VF&6MRzG@e%*g):vCJgP[+7NV]$z]*K,aT^3mtk4hBgGqod}LFs' );
define( 'LOGGED_IN_SALT',   'E}8.K!~6y3y%Dc$C>{k_[J|Vv8$l<3D#$46X.;eJLA6=h@~%~2e>ilO(k%*9AoiI' );
define( 'NONCE_SALT',       'YT/xa|$ixa9#{841X>Q2RyNJ,ajo(V)e{wW7($ro;wgq<Ku+vfx[}:~&wec}P=_Q' );

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
