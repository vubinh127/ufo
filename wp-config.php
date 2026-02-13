<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ufo' );

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
define( 'AUTH_KEY',         'L-HO*<.AsJfvBM&k?o53UZOQ/;A:;c]81L~C1VOOv0|Hf+>(u!jL}KR_J.]9@tV2' );
define( 'SECURE_AUTH_KEY',  'tY3K{8kzZX7_jYmugykpts=YB)m!k&~PRzEN 2p%pVoUK*M}RA*hKlx3n:L7_Cz!' );
define( 'LOGGED_IN_KEY',    '*r)J:8A(6Lt}<y}IyBM@4E[3{0v.VB0ydI1dUfX#0y`R*/-X={3bLp230z{!Kl[v' );
define( 'NONCE_KEY',        'Mf+xe|Fe1lNOkPR3Zk6f=$<RG`Ax;^ACZc;2*dxD+xXK;(~jU-{X&+)Cn%E3{w)7' );
define( 'AUTH_SALT',        '}bwJ<yrP|EgK[eNzdcVu,f)dg<J?6.T+F8S(X~%dT/_1`A/DVS(F2UVJR?M`UgNT' );
define( 'SECURE_AUTH_SALT', '}#SCkmd6sFxqIuA@E@or=5)PB?5;Zs(k0@plnD~s1E.7sLD 3|4A_j$VAlX6RyJK' );
define( 'LOGGED_IN_SALT',   'FTxxw5n1:Ni>3wjACXw~~UuO3Ln(ME}3|ltq@j@Gq)~pgH-3$MCn2)qY(rBs7*sn' );
define( 'NONCE_SALT',       'Ar1jpV98C*Xz3Y/k0;OH1/dH&9_D9V;S* O1uk8r96/]M&3Wz0rCHgkG&f7^g5de' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
