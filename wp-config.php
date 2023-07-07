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
define( 'DB_NAME', 'wp_demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9Q?b3rpD}~`pc`/1UV|uGzCG!>o5RS#I p]Q`~asiPZQyUef5po.}E$z7%dv{CTN' );
define( 'SECURE_AUTH_KEY',  ' Jo*OZltcr++yb3l{a=pvw,[*&n!/D8RR#c-$lm-.|BZPw$bW#gqF1Jgd&W(NZ, ' );
define( 'LOGGED_IN_KEY',    'cjowh-,?$O<R-W{,C|sJAZn*,N vP]<(wf8Q/kP;bA8R!RT26.qt=.>!AubrA0.t' );
define( 'NONCE_KEY',        ':[H{`M`N]-`lkk qmAg!r}@w#t*~Q/y~(]D}%aC]BA-1P/qDc>Fd)j<9`Nd1,$TG' );
define( 'AUTH_SALT',        '#Y16QhmwJ<LT80ER5TV?2^Jk^,jzf`FxTFBKQgwp2]H~+*$(>Ik9;V:FS/<3;A<?' );
define( 'SECURE_AUTH_SALT', '4<5=~Oz}m3|&AY>>}%rvA.k2BBIh(39/}i<v:X3[Z]Zm2Lpt2g K/a#QrH`V{YqI' );
define( 'LOGGED_IN_SALT',   '];)1n_*X5>do%b_Fsay0ZucSw@<?5w/SM+(o{AuX>DWzOw|Yliz{{*c1Qv1VXYr6' );
define( 'NONCE_SALT',       '&{0_;^v+l%0{BY?#RV%@7>I1).L&[gQe9>Iy.JlA_:]vxV*x<9GXu3NQc?lHS]JG' );

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
set_time_limit (6000);
define( 'WP_MEMORY_LIMIT', '1024M' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
