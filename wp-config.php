<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'webshop' );

/** Database username */
define( 'DB_USER', 'webshop' );

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
define( 'AUTH_KEY',         '/UC?:X/:}EppO.;160^3g/vw][(a|:r<Y&{m~aYM[/04Cby#{{NC.P8?sdBP9?N%' );
define( 'SECURE_AUTH_KEY',  '2j*p~FHe~:9rO_EP.h_vqMEIQR;F0GX)_JLT;g-uwPrW]=Ee3GArnI=KO@.#HpHw' );
define( 'LOGGED_IN_KEY',    'q^O*ae:dZx<c,1M3`C~o.5F%N&w.pa//y,T(;N=g|$0nn3e+:j$F 9jb{I^vW IH' );
define( 'NONCE_KEY',        'b_.N-Cia ?p9A:`:gFH?1mBW) X>{$getGkhbH**RfdnFFfRMxp9a*x]_}6jK[Kg' );
define( 'AUTH_SALT',        'Nx)bI^a%|=Z<MXXIn007q+2!VD4h% (1h)n^/(enE&U9%==Q9_zT[c*HJHopihvH' );
define( 'SECURE_AUTH_SALT', '=yJjWZ6?o^}d7oMs5Ae>9l? <JAjEx,Q:KvUhY<(Z1@2gjdv)@UXh;:X,[uXp8uS' );
define( 'LOGGED_IN_SALT',   'i<WQn3u=xL{527n+v)C4kR&71xz2!MjUZW8EuR:CsU:YnFbuCZ#vz}V-/XVWg(J:' );
define( 'NONCE_SALT',       ' F5+}5l;e7=tixBF 6h1k+Ege|wfE7A1n-!QDNKecMh`Ha_A-1#xmo#e=]MN~%tR' );

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
