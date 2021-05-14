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
define( 'DB_NAME', 'dkue pro' );

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
define( 'AUTH_KEY',         's[D{=ZMHS7YA)!8y$k`+`4w$^fUW_c*LJI.!53Lke:1O.m~mRiQA:LX.b2pAP2k(' );
define( 'SECURE_AUTH_KEY',  'Bl!e3m~X)JWUHh]2ZLoG|WpJtZ+8CBO(Ymqj5d1^To:S;}+sN/iTR%_g1D{`D!N9' );
define( 'LOGGED_IN_KEY',    'rk!*&XvdR ^BZ;>Y6<]#ZcR+J&UbH:pD5=YvZ^j|ic<rIJe&g*>c|QjDFbit6p#V' );
define( 'NONCE_KEY',        'DeAkM:,-mD,kp_z5T36nHTxuT`/^(c1pN$%d|R+fi-L=dZ}jO8+3YTojx}$n3yG5' );
define( 'AUTH_SALT',        'S8wiOe/Xzi?,Sr 2&wuX;5sD$mnOU+(Nhd2M>%UU7?oqCPNu3qHNS<U<+yANF0s7' );
define( 'SECURE_AUTH_SALT', 'CdnK(v~(w*oIr;uH]P~h6dw-ABlUt<`=Q30!Peq@Y?N:7V4G,:rV#1xJZX[|?9_m' );
define( 'LOGGED_IN_SALT',   'i;Y#f:9FBZ$z$bby1VzBhmuIgk,im:6+M_~<h#/A)NN1q;$?-J5SwQ,LRpl&X<g(' );
define( 'NONCE_SALT',       'rMrEW^njLGNYe?$,@j|g~4tX`_}0-sC#x{:l}-;9W/]}67x@>sHc?t,<M@64Oa8M' );

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
