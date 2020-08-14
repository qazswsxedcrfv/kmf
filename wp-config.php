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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'Ej@x%MMU!^KH$F?W4]IbNeK`m};]qq8i15O;%/4Q05#*,O,p$`,[1l?:|Tf/kIQa' );
define( 'SECURE_AUTH_KEY',  '^xWUk[U=%%U.O]lL$.?EIzCFU=@%j<x63jh|QP<0/);d@|a3:dzBd47H>ipmIz-d' );
define( 'LOGGED_IN_KEY',    'brP0 YkQ:VAp52|[)^lzV)bM3!hU;#C~f[J.T8+=WaX,iq)EMlX-j7gA]0p.vU8p' );
define( 'NONCE_KEY',        '^aK& rY(9)~!KH/%b]wp?4l8t=h05^YBWiD$txP;IvZPW3g5Aa7fLF+t2xHOQp|m' );
define( 'AUTH_SALT',        'e8n(2( @w,9n,GAovvU},e[Fx$=(xROz<xpU68ldEeGCs1aaNn.bH8F3;j?SC:0e' );
define( 'SECURE_AUTH_SALT', '~/SBFqf~800`fDQK[KAyKg@*z&U}-G5Xi2+:6#?>}#FtGJ*`w5PXMf}[uNh!?JWP' );
define( 'LOGGED_IN_SALT',   '{y*+84`NzVaV/,,RqbH|R{{TFfZ8z7|{5__G)QRfh[,I4._CS/mOF;6#)xG|fXF}' );
define( 'NONCE_SALT',       '/8)rNkbqIa>tSa;@y,q9h(#hw99}^)/8ocAGVcL,Rv|GCfJTp:FiNN)COq3w=R8&' );

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
