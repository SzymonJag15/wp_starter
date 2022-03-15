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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agrochest' );

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
define( 'AUTH_KEY',         'Xc3Nbh>$507jjg;-nN{M(IW(mWTw0APg;7`k~V_*?_BSPfC9EzI38GPL3#_U!0*M' );
define( 'SECURE_AUTH_KEY',  '=&Uj zyMeZATRZMFlv;oRIlc#d0Y[++*k&#*(Vy72f6x:;0M8EycDTTEw/ECAUv:' );
define( 'LOGGED_IN_KEY',    'cly9z7H*cLeM!o]<T]CJIY$4sI-,Xz>.$X )cVR]pT0VVNRU[cc>C{@h?[mhDC<;' );
define( 'NONCE_KEY',        '+49k[&W]Z]tJ]pD>F%@v{*ZOH++qW,or$bC_gut]0?/U3g].ibLJW0W6[(gM%6Bk' );
define( 'AUTH_SALT',        'k=$PUDvGWwY|C4W^xW_.*uX!{{LzM11`Svbze,4I?|<&fLkwbf4,X$=D:R hl6/v' );
define( 'SECURE_AUTH_SALT', 'S<4c#h[frj(Z+hHOw#/R{0qUBUu BE,_O0,UMmLSh#Z!ENH:WRLJT1+4;odnaRv(' );
define( 'LOGGED_IN_SALT',   'k=xjtiK!3p#:F``9Xv Qk=Puh3D~y>G18`q( .;DQ*+AY$63+xr8O ^Op-US3kNF' );
define( 'NONCE_SALT',       'mitONCeXJg@KEcxsZ_=qEK>/|Oid ts~<;!iT=ecM,f3&`z$hh!8&=Y.)_CQte_j' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
