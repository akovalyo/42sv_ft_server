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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '111' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '.0Y++2l^.Qy!W4@j-@1v#PU{](6(iE{wOA-#Lxxzka,RmxYmeW#$de]owHh>n_.`');
define('SECURE_AUTH_KEY',  '{6MrK-+N@oW=5hLT)oMPEH/Obt|NGFonsbC:@*W`xXRSF|CJ9p2#&tMj|@[Y7=1+');
define('LOGGED_IN_KEY',    'BJXhVz+P!nw`E)axbX2>uOlUAhKi:-kOhohBZb$)$*yn7b/,U-$nx72I.ftS|Hty');
define('NONCE_KEY',        'Qim!nKvQ]YMvlu0H$cqeJlkB>)K0$/N-4|K(v++9+kG7z)[n-BlF.<r_.u@4HDrw');
define('AUTH_SALT',        'MghN(iOraVLlQ@[=XO;kt_sj$.{w6&K=+>ZtqYZ:!Fx_PH@]A.G+z@2~ n{+5`I{');
define('SECURE_AUTH_SALT', 'Ar98)D.dZBit~]dmc0Gk4pJ-K&^o}vBd||(2/o]itiC9;&7gR5-f3*1%ge{4u:r~');
define('LOGGED_IN_SALT',   '{LNS52gTgv76x[=POo~ (x}K5+oM}1+}k3s_RS_W<ee~[(2l>Q:MYB{rv1R)~.sF');
define('NONCE_SALT',       'R|^|MfHwrP46NR]Vf39#t90!V|elq+yfbfj+i#!e`s%J3.]UkV+dmh Vwb{@lFEh');

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