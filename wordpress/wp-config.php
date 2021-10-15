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
define( 'DB_NAME', 'equiterre' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@e9^l42!6YIA(8y,bu)*CMC$,N>58UhD8xl(]jf@#?WxX{W[DpkMfA+65;cC&CTv' );
define( 'SECURE_AUTH_KEY',  'kfH+Mo,C^2pT 6jL&,G(?Ka,<H<x/qt5vQjKXv`,22-JVHO?5;X#xm%X<Z_9Ip{O' );
define( 'LOGGED_IN_KEY',    'q[0=[rh34V?nbF,cYMP]Le^rYfhEe7o>=pcmD<VL>]qJe>D;Iq[n4/0RB;)WCHAL' );
define( 'NONCE_KEY',        'W{^vppH #$8K5Sj96SMm@YpU`! Ceo5ssV*CI^gc#.}bpjQVQh{HOAlsQ<OUT^$3' );
define( 'AUTH_SALT',        'Z*@I5r&&zXX]+4_vLUTDum&vS>}2e;6mf()uYA8y2=[u/~Ieb(mKwKe(|>B2aP/j' );
define( 'SECURE_AUTH_SALT', ')Q(@=qM9.n3Q[[E*jmZdF?1cuvR:F?Z;.}b2)l-i@q?.98EHNH*VuYtam]zNjlml' );
define( 'LOGGED_IN_SALT',   'S9<N*40nmo>btfS-0lbVM8TVOwtzr`Nj%Po4`Sqkh<J&R<Fe8ovuVo_+p`X>kng!' );
define( 'NONCE_SALT',       'HzKnJjT}sYTF$:N)WgqJ4s_MyWSIexc[;bi3r&==3|SR.?M{u!IC2b)UQj1wPlwI' );

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
