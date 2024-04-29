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
define( 'AUTH_KEY',          'OwLNKA6n%Le3$Mu=Djy@<[Q^~<)D)6#mTA$7[-&W2+AFLeCE*S/,-%%Ml~Ejxr+)' );
define( 'SECURE_AUTH_KEY',   '+MH>ItH|}#2d:zs&V?!mxJ5RYBVTpZG?nBr{&6SZ&<2m5~sHVo8R1|V^t/%!.dim' );
define( 'LOGGED_IN_KEY',     '[svb@5%q^NXSf&58)TuJ,IB}g w%1!_S0QCaZ O@[_!_Z{7W/b0i9fnL<mYo$[Ds' );
define( 'NONCE_KEY',         'A,9]lY ~5Owu[3DD<WmoE3DOjUH|aO=*n/tisUL{oxZsV!Ew8G*~a{+Vxs8%}CEC' );
define( 'AUTH_SALT',         'K!%:2u,+${`1Q0TRG,=Ue;kq@B%.7%%zo^SPavfov40rE_6z8+Sxny`tQ2Be4M7C' );
define( 'SECURE_AUTH_SALT',  'Pfjkr^0?ikg6Up>g3|M]v|WWBQQj+ ,X6% ta;Lw;jx6)$~Lco^743p5&?^3*ZND' );
define( 'LOGGED_IN_SALT',    'vgFXQwguDabHiUJ~x!SH.n*@eET~Wtu{G@5^kV4l^s.PW38xLVTgGqvb?b)g>w:T' );
define( 'NONCE_SALT',        '11Lf]#2BiQKk,9D7W!NZ_.*Bh19,&-Up:hkV6kv~v`w,k:S]q#0rr[IinAL88ULC' );
define( 'WP_CACHE_KEY_SALT', '5wD,![<m+`jr4qKcu1m8y.;GL{sTO}?B$+)+j>uSffkfnMKY|mig%8to=wScdy:q' );


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
