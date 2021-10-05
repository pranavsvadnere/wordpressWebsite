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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '`+CooF(PYX}#@g#/C+Z=qF?`erCFWA`m2Ji<cd2bUi9$/!-Z^Mj*i.6JnFG>Ysrd' );
define( 'SECURE_AUTH_KEY',  ',75ZVc{.~I]_96s7!5aR!q+UD.OnL[f^:=G_u1SP&/h5%@2F.$A*|{28faiBVi M' );
define( 'LOGGED_IN_KEY',    '}LBh^GRjr9Phkobio-iE 5z+VgL5#^J@,_WHc(]?9/6:7g~o_=/!ZO*m`K1g;yg3' );
define( 'NONCE_KEY',        'd(]1GK*je#/_sa`[NtYdN:t|3rB 0K-!%a[5#0Hsi9@fpp~&LNvLjwQWNj:D^A*X' );
define( 'AUTH_SALT',        'iU1e>HWot]OE=.S6r`NP)0p+/CQ9Ho3D1.4dwOx!Hnz!@Lqs[Z/d&,kIJ|l8^IW3' );
define( 'SECURE_AUTH_SALT', 'G*=m/MA_)~A|Zo3M15XX&/`p5L`u[d2!T:n<4&OgUfc5[DN#~DCZgeOf-.Y/pE9j' );
define( 'LOGGED_IN_SALT',   'Q(HUc ]:Q7/_M3Vba6 o7AA-AA|8SHWmZQDrV05SdZ0.f<`,vi!uw:G~tIlrx3@b' );
define( 'NONCE_SALT',       'xA[t4UGyLnQj1s;l[TSx*s&[8/sGycZR9b.aVn|b;<0INh+:b:~U~*Og8As/h5<6' );

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
