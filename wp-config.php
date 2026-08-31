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
define( 'DB_NAME', 'wp_deluxe_passport' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root123' );

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
define( 'AUTH_KEY',         '(w`w2<y,(IF^c{G{TtXS eQA&@ZZ/Gx`w30b5e(?BJX^),V|e5sjE1ipD2_I#b@6' );
define( 'SECURE_AUTH_KEY',  'SnW+%(k;,D?NklKV%;_Rzeh9)Kiwk*B*6GZtSv m7J|:A2;g,(65VC0kbsm>4{9p' );
define( 'LOGGED_IN_KEY',    '}h&[N{o7y]2m`ov&P#_*.bDFqjLhX(&f]}haF2?<M9+vW=Ux.Nw-Cua]]{9[Bmw,' );
define( 'NONCE_KEY',        '12o/tMz5i@P^r<;mSd#koAj/F9@9VOaj!_rZI|PY+=ZBQQ?Y|KUh7TjPYSDa&r`P' );
define( 'AUTH_SALT',        '>(X3T[v=jD9_ag%y5}:LOV},<O3,6a-jQ9~C,+p,Pt9`@D9yHA@;~)<^CN<bqB)2' );
define( 'SECURE_AUTH_SALT', 'EHctrDg=KjN_nXwJ.J@f4A4&RXr$do~?kmXcn/Uw.RaaS-)mQpdyGhYw(Z)KJU?0' );
define( 'LOGGED_IN_SALT',   'O P2)s,]*h/hQ6Y;OKXUkk+A5%gMK3W}pTzOW,un-FO?!}@5|{.:o=|#:.@:EbwS' );
define( 'NONCE_SALT',       '/1-Pr4nceRW)R}NZ J5}8GfNBuqTpr9|ernGHY^?G1=?qUlmf!LxV/aBY ]_<`=>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

