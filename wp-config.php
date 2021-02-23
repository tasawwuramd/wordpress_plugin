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
define( 'DB_NAME', 'practice_wordpress' );

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
define( 'AUTH_KEY',         'Ihj4UJcAjb7e|7>!u#/XrjaUkD,Bbb1:88#i$q:5em#00:qdSVB.[Ed>SN99M(B?' );
define( 'SECURE_AUTH_KEY',  ')wz?snN<E,md/i53.sz9yXY,ZP%tDSpU[{t98)b2d7;Xe~Hv:L&N;q#OZZ1,{<U8' );
define( 'LOGGED_IN_KEY',    '8y=tFU&XB^1H{;T5/hfdOHI~W=h,?4)ux~0tTfH9T?!B/uzYdUt/2QyuPvw$jbDw' );
define( 'NONCE_KEY',        'ah6!X4Edn1KSm]y8g%g8tfI5sm=q{Wn-0&BKR}%d-bjKKx4pbm+eWpO2I;JD[e|B' );
define( 'AUTH_SALT',        'R0Pu;BcE$+K]?vi1P~NJc+QJ$sArJ MRwv};MzwndD^$D5+D@47sQ^0QFeAY_`H8' );
define( 'SECURE_AUTH_SALT', ']N]Up,rlOY2H[/2hJ{m_ Twz]67tAi!Pm!jM>Q}b7%+{t&~]M%}RV]>DjLenX9K6' );
define( 'LOGGED_IN_SALT',   'l5|T1+QiGnb{Y0xr/+&cJ1nXl1N%o{=Zs?#}aa?rMpE,sqD.0Ut-V>@T4s?*)%RZ' );
define( 'NONCE_SALT',       '9FGkN&mMonW4VR.)u.:]-jJ1&Dj$~lwPq#d*#`AoPqY-+t7[O=<]dUNj=r}f`16.' );

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
