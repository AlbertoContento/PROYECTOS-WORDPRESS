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
define( 'AUTH_KEY',          '67 vTvrJ+mxAEDNS?_B:`p+G;}k|Dd.NZJM8)w=o;MLvrq>M T]X|(y@IP)Gw;gj' );
define( 'SECURE_AUTH_KEY',   'HI#bi).mH~5OYW+gm{~tt459kvN20._MJ($f@-F]:8tz%[T$#%N3A:kIk&#q;<kL' );
define( 'LOGGED_IN_KEY',     '1yHFrR+<PwHvA!2M{Dk&@fyx^n&GYNP^lz},lhp9(l)Avr[rIK,_@g-qZ]VX+iX%' );
define( 'NONCE_KEY',         '0Z2+^zlh`k9kvxn91Gfq^6])-NmGsdzu]-LpNf`yAnz:a:-;h^@Z`Xh[Rb$vRu `' );
define( 'AUTH_SALT',         'etZv<b2%42%4/#a<2.AQ)e=em{IZB$m_UU[)Yu^s*Y+$p`fMQ+u+50&[q8j7Vmhk' );
define( 'SECURE_AUTH_SALT',  '}JUK6L# c8]ePG1w#w!{GoR$/<j2@W+DUoFr>ZSlhf.n1|U)+vKw{Lp ePgI=Q:m' );
define( 'LOGGED_IN_SALT',    'Xg5ToDTf)n(x)_*s4M]^*G4BpT9b)JL%mW>P9J$eaYh3w+t$[Y7m8,y/rg~6m|XU' );
define( 'NONCE_SALT',        '&Sh=|Cw[(&kizd7K:4M^iVVa|Jjw7g];r[: Pz1KbHLF!ZHCNWUVA-y_&45{&)(B' );
define( 'WP_CACHE_KEY_SALT', '@)pNxjxVkMoYW~#X)Tuxa7n/G~D=ri>{K(b-)Fy=kT-2@9#ittFa`h)8=JBT1HRo' );


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
