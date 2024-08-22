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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'p3333gqz' );

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
define( 'AUTH_KEY',         'Y1^L6KD(gIEjqCw/*wvT$9=PTk)Izn~BZ@9;Jd-]4Wo $AzQ{LSjZ[V1EU<hXWu6' );
define( 'SECURE_AUTH_KEY',  '/^oEz6C%oJmyDC0Qph#p4w~wj].lc,N+BE3T`[<XjC/Uh[?x(whohK5~dh.PG7N]' );
define( 'LOGGED_IN_KEY',    'AwQMUT6~l<QH#xhkcv9;2bP<`Pr4GyK3+}l9nvA=o1p^VMxsMSsC:a.Q{S|fFOOZ' );
define( 'NONCE_KEY',        'B8d2#s^=RzqKMV7K/uQ+DW&I4rm@)d!(!{jV7o#3&nM=AV(D;Op6^Uthugr2!!2j' );
define( 'AUTH_SALT',        '5a#3DcsJsI*I-qU0Wj]CgPrA7$YR;h_!K{ov`OebRfm?#lM69hD0<LUVq>`AtIf;' );
define( 'SECURE_AUTH_SALT', '%!(n(8cz/>/!!+C2J7j!OL9[wBL&X+I7X{=Mne/=zM4c:Q7.7og4y+)QAU,@YMpq' );
define( 'LOGGED_IN_SALT',   'CcxD:m!|Ji7$A(]~#}B==0O{x76(Xm@#keQlhLfpfu-Z@ gAXmJW=FpyiZ}czm<T' );
define( 'NONCE_SALT',       'Kv3]3k[v4}AZ+a{pnMChV8^PM)jnpv8`0&qBwQ :W;E109Nh]5o{$j5#dx4M4hFK' );

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
