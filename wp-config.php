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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yZsn3k|s[-Olr)6+L7bVq{aNx_u+NM24Xt3Y<hBM^x:|k|Wn^< Y#Xsv^B,VI^gQ' );
define( 'SECURE_AUTH_KEY',  '1 5,dBb KiIZr/.F-/|NCkIPYl,d|E)_6`ysTpdd?>GmIu3~*i/y:|G#P4#S|%Yv' );
define( 'LOGGED_IN_KEY',    'BO*nw>kjjsBa9{]&7<GZ_ArMvAd|s!WNk(6.R+,s&2Y(rHNSwn?##uD9T~f9+4E0' );
define( 'NONCE_KEY',        '0!+xfx]O;kaV?TDI&|y$!|)YMGJJ.!Ij&w%hgR1;bG( 3,Kd:/%3xt,kB/zU/)h:' );
define( 'AUTH_SALT',        'Sc.k_G)3zYq`O$i&ncP3R; sx5E<6=X-RkJKteU>;yRx52^wOl)QJv<wP-~XfYcK' );
define( 'SECURE_AUTH_SALT', '{IBa3$v~O{.%`m8;>56e9o#6fPrB~JIHZ:+i. &D*~?ycCQ>u=);#z:cFf5SQ:|d' );
define( 'LOGGED_IN_SALT',   'ycD=%Ud;`[?5#+/RFt(R$BjoKZq$]z1ao:xwso.Tq5c%x*|Zjusq:|AGRm:N]ZI1' );
define( 'NONCE_SALT',       'J*-+C6JwpWzRJ/YJ=IF(RiRB@CQq&<D!7;~:[~DY0@VQdMae>6=Fg~Pf1o5o|LZ5' );

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


define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
