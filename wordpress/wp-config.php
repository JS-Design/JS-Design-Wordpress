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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'js_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'W,GqXVD1TuOZRV&etNj>XQ_N|/}d5!z]+%@,mEWSNs-gJZ@g#@v>]Rd6s~YX_Qt@' );
define( 'SECURE_AUTH_KEY',  '_[AC=~<&G)N6,b{~a08 &f%_GjdkL{NUf.%OoS@orS_pv>JXjH[fZOM#%&@)DpIV' );
define( 'LOGGED_IN_KEY',    'i-h#/K+v^$,Mu+ ~6lQ>;-fBM@pMKD*nLKL!4!L1zIla4Hca*^(3RpCAH4L(a@`z' );
define( 'NONCE_KEY',        'eN^<jbA!po[IHR5s&Bi4QSaftfD.84:oW+a(@,k.B,1,JQH+3OcLv|oIN]aKw{pT' );
define( 'AUTH_SALT',        ')u>vgB@.B%v4@v&*9MtFve#[3o6G*Gn2T%yN+R78iGh*k`^5{~HE/bKQd:dB*mPI' );
define( 'SECURE_AUTH_SALT', 'qI VKjc2;xzCsOERX~zggqCf.n*$=2C{;9Kn<=wAo|<b4O}@##3I`rC+R17Y2{vV' );
define( 'LOGGED_IN_SALT',   'T)](3S9B+ld>}Mo1jVyiL.W:%;)&?jQ@q*BBvHP%b7)jsGrr=FLj*0j?tF58+{ O' );
define( 'NONCE_SALT',       'x_<9MU7^<R`Ox0O Xh)whl7RwZ-Nd.X<C5vbD=dK<l~`/=%.en<8Lx#Q,|G>h}q-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'js';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
