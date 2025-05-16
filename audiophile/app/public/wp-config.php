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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '-ln{*574Q<|BS%/`07x}lPREi ZE pp#^&`6Ivg)}Zsy5;},_G-gqpB!c[,N5^w.' );
define( 'SECURE_AUTH_KEY',   '&XNU:SsJcsqek1!GhxK+}L?0xK`l;:$;GT%eVOJNu<7d*r?gnZH/ZgE4F@gwyjTB' );
define( 'LOGGED_IN_KEY',     'WTT[2<&TGx4L(yXTo[2<;uNRBL+`wB{UupkUnNszf1%1/Jg=pLN[3dn42@[!`|gQ' );
define( 'NONCE_KEY',         '45JO`:(1e{zng,g0W9=(BFH(]_eR9<Xi),.ik>rM,[y8C:=TFb&D DV>}9S2<co}' );
define( 'AUTH_SALT',         '}i.FAl|1AHy9C 2c=Q55!*bejC){c#^=gIxH}z`Zjni_S=N6*ss[CK`5$mOi@S+U' );
define( 'SECURE_AUTH_SALT',  'J<JH{J,m<2^Yd6^)dh>8@&cUoa/rpO1up8LeU`+1&{vi+kX-yA7{MdwU_A(9*X}#' );
define( 'LOGGED_IN_SALT',    'm)9Cnm2V17{)%MiMnv7;fzF*;f&bVU~l!hF~#Hu,JSl7{(W&(^|{2s1v3C KqCk5' );
define( 'NONCE_SALT',        'N(<e%>3flDB(ed}a{1(]I[)*]d[)r0$>te[u,OiTyw2I{@N%y<w-FdGIW.I3qzW4' );
define( 'WP_CACHE_KEY_SALT', '?#S] c(<*mh0c5tg0)l=j^O8;iw[f:F$}Rf%OuJ2M!7WD7B>ROrMgt#*R6<H1S}s' );


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
// if ( ! defined( 'WP_DEBUG' ) ) {
// 	define( 'WP_DEBUG', false );
// }
// define( 'WP_DEBUG', true );//con esto decimos que no muestre el error la pagina y nos lo guarde en Wp_debug para ver el error
@ini_set( 'display_errors', 0);

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
