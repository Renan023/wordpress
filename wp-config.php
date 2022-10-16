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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '^!;Q|QsjU-,zG&7%A k;iRy;._A.^<8=C# r6*Y<$AOG^l7YN~*fc[jf6aJ0KH:a' );
define( 'SECURE_AUTH_KEY',  'leA6h3h)->N,[dOTqShL[R;w,;-rSf`mWz=k~L66>RH3aW^[Z5$VOrK0#V},llrx' );
define( 'LOGGED_IN_KEY',    ');$2M0~%w~o]j$e|mSM:4>TF=[:%GbUf$%V[^7XMXc1;yK&}w[En B^5n,UkDOE0' );
define( 'NONCE_KEY',        'lq,OdtQ@yo0{J1g7BVYHalC?Qsg um*ISe^XSs_olw4*+W9qbuU,& ci]%iXCElE' );
define( 'AUTH_SALT',        'SicQ%08K)e`Jm{(K{Xj4ko4asD914PXDOP$#&,yrKBeYew10l~1G@%d(D sUK04{' );
define( 'SECURE_AUTH_SALT', '/J9%}s>7Rq3_ U.a>P@:% M-Q.HpAB/%FUimO^ZEU=$45&kos&kqqR-/&X+pBu(W' );
define( 'LOGGED_IN_SALT',   'zuahpFP7oDH4L|aJ,Si}Z[A>4zS$/nsa@G_:Rmq/n{>hI,,.(x^q~.#Ak{nCl fj' );
define( 'NONCE_SALT',       'RdO*O%gMb5Qz:h$F+A(ksm#WtQ|_hz*t161aL[T_^+uWG7UTJ:kV*qY1!k*[&b>+' );

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
