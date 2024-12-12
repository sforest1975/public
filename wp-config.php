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
define( 'AUTH_KEY',          'l&LXp![AZTbkr5fl.B!^Kyg@sQj,~*F&X4CSEVz]CM~c}|<otKcl300K1bl*nQ w' );
define( 'SECURE_AUTH_KEY',   'Q)lrA_YmtbtW07~0s[:>5G1I{@:BcCgCx[>l&K@P;OF-?q;/n0#_!XHk]tkn/34,' );
define( 'LOGGED_IN_KEY',     'y(jAk)0~RY_DQ5q{4?Dkd0]mAQIB,HfVb1wZjLE%^jyNxy[&+a3137uQ>ZkVZ;=r' );
define( 'NONCE_KEY',         '(*F;wnkqibOG|Is}0Qu spIw$,LHgmNK(;R82#?x[ &B$3)~Ym_Jk~ m6{KCMG`,' );
define( 'AUTH_SALT',         '3Cc7xY])I(xv*kK<.(yh{:;E$L*2XKa~zxf<m$Kgh?R{NSNY3llK;b1@v1@.<8.l' );
define( 'SECURE_AUTH_SALT',  'kFh:Ln<{(Nz#5TGsT1ROI<^L1MU&~,dW|#T$#2,q-MKm^;8/5Y-qK+7MQvUj-]C+' );
define( 'LOGGED_IN_SALT',    '6!Ef-XP8`>[@|;>[ZRTU}z6MHn$ee9uZ]dZ&t<kX1q2j&XR.$X)TfTfLbQ-bF[B&' );
define( 'NONCE_SALT',        'MHinhFYUynNWM,Ae9>EfA#x]A CE;KQkXle%Xk6l=+Z6^2G#Tk0hk&IH@V:E|~pj' );
define( 'WP_CACHE_KEY_SALT', '&,rE7K+.r=~bt`jJwN}bH;/u!D7_E$]4cgB<u&E0o]feY?<NK&JrwV{H*7!.cQdF' );


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
