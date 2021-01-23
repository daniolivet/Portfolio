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
define( 'DB_NAME', 'daniolivet' );

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
define( 'AUTH_KEY',         '@[<{;kv[Qm)k1|=e?mxia*woNw<H=dd#)XbuDzmsFJZ0q:Xn~d6Q4f7[sdw}EO;S' );
define( 'SECURE_AUTH_KEY',  's~&WTDt|:6aG;jL0e~{sbO8HAfnOo*G{}!+HR`^*pJFE^_O6&!}g,iEr?`O$Ad43' );
define( 'LOGGED_IN_KEY',    'C9kj{1q^g}H7~}q5E^@P9rGUmd{(4l;p4b8_Qs*N<kR|dJfn91^+pm}kSq5,qT8!' );
define( 'NONCE_KEY',        '!Q+60tl2#Ff|CQgYr*}<{WH#o9/`Tgh4n4:5=Y%s_`.ClZRtHiWBv]Tz4tIa{_xq' );
define( 'AUTH_SALT',        'i0bGB>AL+%jll2XEn&!34_uX_I:^r/2u~;my9mi+??/kJ7vv)H[t)ft}2lL IGfA' );
define( 'SECURE_AUTH_SALT', '@_CtqUwi&GVZM=s(:%sIbQ{&9j0Km?`]uN. BNr(H:uW+Y2n_vA5k[d+i;9bQC}3' );
define( 'LOGGED_IN_SALT',   'CY-8l r!:jC;!P=E3pU^Xx-4gv[55aJ~1!~~L.btnHQU]!ML(*LkFh~!pzSz%K8*' );
define( 'NONCE_SALT',       'r]@>?+m/Nwm_:T,%0E2951]GQ+-H?MxHtm9DKNApQJ7l~A_T)[0`g!S34^XV:_q+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'do_';

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
