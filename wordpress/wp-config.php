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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dawaa_college' );

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
define( 'AUTH_KEY',         '=J=_=m 5;S^Hv+mi6pSR[|-O(]:p>B5H;{Lu26,;JQ^ce|@JdXu+r77YdyS 6N[N' );
define( 'SECURE_AUTH_KEY',  '~shKckH2]kE1,DrH9DzoUZ%,[W#EF(eDR#Y&:g){.++/-T3(Ntku*p(P&dVeJ|_,' );
define( 'LOGGED_IN_KEY',    '=LxwTkaI#>F8a{i8N/ig).<Bdyd+g.MX!WVOdw ZV&3qcsl7%=*)E6QXm64!R,){' );
define( 'NONCE_KEY',        '{|>KmJc>e3d9925f_T3|uT=b*<)PtZH,Ty**,+[%1ZQFmo0 AO_m9{q6YS^k>9KQ' );
define( 'AUTH_SALT',        'Um>CY`%rnBWAQ.F``xomw% =~gU~-f|kF[3p(K5K6mZ&ox&|Q#;jdiW&`*J43w-#' );
define( 'SECURE_AUTH_SALT', '?0tgS<1k=[RKBMNIdg?o1~)W-+{2=X;bJs2K=)(/UO9KkVL`GFJ#GL,uux_fT;F~' );
define( 'LOGGED_IN_SALT',   '>58O ^t S=5uR:tBmI(vNBOF4/vi`f)5h2rqKB]OG92%KY[5^1oI||OYNo O_9q+' );
define( 'NONCE_SALT',       'CVwg0M^x{KJTk5XQY&T7h~&zA`kga69*HlDO[k=DO?uoGWO.9DU=}$HFHMIs;m7/' );

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
