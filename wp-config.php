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
define( 'DB_NAME', 'pozitiveplustv' );

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
define( 'AUTH_KEY',         '?jB(x:jTYH5x}F82hLzG NqS2 >D(:M-7STjqL0Q+aO$f7zq|7 eT0>%ea0SWq]X' );
define( 'SECURE_AUTH_KEY',  '2<R-#Z0 XhB0L{kl`=s%y$(*h]kp8Q[)v$*X*=mR29C/tjai]ChKAMt^0)RmTw+G' );
define( 'LOGGED_IN_KEY',    'or`ShRxR7/2%[U]d8!/Yz?:4L3Lxi@Ru2rLDh6TwYP`iuW#x7h!bK0VEzx[kT~cP' );
define( 'NONCE_KEY',        'c)grm/OooshqfV`[4[b_Z,%OZ6E 8({y./Bpuz`G;<J!^n* 03m3+Q3%cRsnk#t6' );
define( 'AUTH_SALT',        'iHD,`E[w@alZbq?jx68~6lc1hyv0Jd4U]O&-vOiDG3VTSb]rFCOv*E*7nnzOO=es' );
define( 'SECURE_AUTH_SALT', 'z5: > gA>,hV2>VVH|n;nP57 CaR!t#Q$O^Odv-Xr1]G|Oa&%%I6^}O=T3b9pV_p' );
define( 'LOGGED_IN_SALT',   ' WVp7.Da7g95u-]&!<l^bM4c8D%~^fjM1dVv^2V7c%DgXpp}RDwM5*<]%!xL*vp^' );
define( 'NONCE_SALT',       '0QUf3g+~pKX+J-m]CkQp:,?^(RR}rh2#V*}R+g>pu>g~W0egFNq$;-YN[BBFKXo{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'radio_';

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
