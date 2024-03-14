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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u635080739_YjPH9' );

/** Database username */
define( 'DB_USER', 'u635080739_gHmQH' );

/** Database password */
define( 'DB_PASSWORD', '2SYEHCJSk5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'VDs<OI:%verUpGMTz0eK8w-]3`PY]F^/ro1$*W`t&@5:M&x~%p7t^hVDMQ96]r(:' );
define( 'SECURE_AUTH_KEY',   'D+[Ei+2gZ[+@z6~s~dljJL!*Dc(uolU3t{RyKHMVpWm~^5#B9<?(sL!8cwv22t6&' );
define( 'LOGGED_IN_KEY',     'qtxQP##_F)%G{mdDHuvphziPy-NY=>6};%]m`t(_H8_Oo[dyx3@_3S@7J<`#<WjV' );
define( 'NONCE_KEY',         'N*L6mHume=PJs.PR/2.kogxb8Djp{$&`4lDd<wdK/7@+/M[`Wm7@z|zCALt{LEow' );
define( 'AUTH_SALT',         'oy#|To!-<Z ~B:(u:LDT=c>nl;V(<o-jkQC:[QgyUYF0#Byb6LKu^zb:n][C^$U~' );
define( 'SECURE_AUTH_SALT',  '#UPT_OLho0k)i^Z9DJb]Qc9u,9!{n$4suPZjSj%}4#|EgVXe!8; N2OWvvBlTaZY' );
define( 'LOGGED_IN_SALT',    '#5B[90NA<<-eq6@`VI|#nKLXUMJ4e70@>jaR:5BUx-[ K[kNn?+hWvlAarIyDu4l' );
define( 'NONCE_SALT',        'J;a/*X?kr5y`q]W939fNEK~+MKm:9NFpv/IF7<o|:h SJHby3(GW8K(Acz=i7e3H' );
define( 'WP_CACHE_KEY_SALT', 'pV^ri<BeLlIXjF<rot;$b1Q`0.~-h3h`^0*uB.mq,x{Y&$MW^QDaNV)t,/n#-#g]' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';