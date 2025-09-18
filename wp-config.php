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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ims_website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Swain@1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^_x`zWWh[n#xsn1{` $2$V^f[B&r$i/ze.22SS4sUPH!<})?Z@s[m&8h9km~t!sq' );
define( 'SECURE_AUTH_KEY',   '):HMNfwM>s(mdd,`A)eCKAI3k#742pD&sZAhP;~(|MUeC64 c4jR}$=e$+:&tS50' );
define( 'LOGGED_IN_KEY',     '#b:5YJ9~&OGSYbkwM^?hb}{(?Ej4.(1~&$hyaPu?-4U~izx4}c[%<.}@DE1Gw8,B' );
define( 'NONCE_KEY',         'G$fQCh@[k A&A-|1RLTFS~o93C7<(hHHXu~u#.LyuB!1Fimlcggl(nlQMjiU<e+|' );
define( 'AUTH_SALT',         'COlOLYCkOm/Pn=xzZg#P/Ry%MT*BPy9m 1=Uo-jFSFnEClsN&P ?S|I<` &_CvS#' );
define( 'SECURE_AUTH_SALT',  ')U?KD!->8s^+gz~2RtTgWf+bw+$*j(wzr=ebuU7Xss`;n!@D,bZZ?2+x?;xDI%>*' );
define( 'LOGGED_IN_SALT',    '!Id! 0X%#@c?>?1Y8;wg,J;[4`_:t?:Sn^g<P22CePoROHZMKrvBgKU+_jEdqMBc' );
define( 'NONCE_SALT',        '}Vy#|JhDe.8L_Mi<,kZq2r@WCHLT]o#In2J0OXTMBCT-}lf|_=/O&R+l)OF!*WS<' );
define( 'WP_CACHE_KEY_SALT', '?HG|og$i?36]5eB{?/x`U#J uy[lO}8GGIqZB!NA^c/$[5 V~B5HMaChK!X<ceLz' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
