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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Hvr70&sZT|wO/xiTv)?<xkT^dF$4UNEK1F*FjUbz@>wBaYSQ +:40PfG5`F|-DVp' );
define( 'SECURE_AUTH_KEY',  '``7|-%[/u[z#czsL,ZtR[*oK<#Mx*jlPumXXt9h;OFMb.La+>e{G[k=!>TzY|Ili' );
define( 'LOGGED_IN_KEY',    '86h@*5{!TA%P@)Y4K9m<]Ll?>1mZ+vkdj)]C}`[JG+)wRgWI$y:?#~D#Z|`yMNgU' );
define( 'NONCE_KEY',        'Oi.vkERVulFK%z7%1C:bgD~gDE^n_gq|NJR@2 20XJ;ILk{PSk4wlQ69|72D.XVj' );
define( 'AUTH_SALT',        'tApZ8x*+DMQ*rZYa^SaK>O=M3YAt@6q%Gbk;OZZHcn> sLn4:>6ceeO[ZqEU1Z9J' );
define( 'SECURE_AUTH_SALT', 'SdpS3T>#yo&<Pu9wj AwZ{vlzmVZn5PG*4HOKZQV45tT~56?NBS]Xx.)i*2Q~;E^' );
define( 'LOGGED_IN_SALT',   '6*P*(digX%+&F1hoC54S!f#%_#TFp]9OM`12SuX#57!Q_$q9&5+dHEI+x7@s)$z;' );
define( 'NONCE_SALT',       'R)/_XpmlYf.n=)_3g!,BzG7[j*vBP7Sxeg naJk=EJ1l/{ rRX;@:b]zS|:8bN~Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
