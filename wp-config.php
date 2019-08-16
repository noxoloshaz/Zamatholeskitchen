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
define( 'DB_NAME', 'kitchen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|h[0rRm_aJ}cR|6`[AA>1*5&gDbA,^_( 2PJ!FMx&.?;U[su*o/[|tgQ6//I)mRF' );
define( 'SECURE_AUTH_KEY',  '*c77AU^eJ6cYKv6>}sZ2(l9dZr_p<t$%&)WRGSm6A.aK9vWv:@A#8-<A!kE?;=}~' );
define( 'LOGGED_IN_KEY',    ':TIV]yS`&&b1P^|s{{9}+u4z3O,KI2o_*RD$jdtk~{B]VU$f*1Qb.NPE-l|$/QuQ' );
define( 'NONCE_KEY',        'ArV$#>-0N<=|7+z]&dx^=J1MkFdh>D[7J>zaK)52p;$kGQ?r=1day>@W+^l8F+`o' );
define( 'AUTH_SALT',        'q%g29B7[PZH0:T9au4kq`QV5&MY,+]>Z&?]+?/k<a-R.NwNhOfUq-w8B`8K;g$x ' );
define( 'SECURE_AUTH_SALT', '~{rNaU>e#m*k4^1AEBAe[>//GjhAFXDS#g`RZ|&%CY,Lw_Y$U:u|/yUM&?fK]jaz' );
define( 'LOGGED_IN_SALT',   '`-4vz4}i]31w^;E4vl6)2K7;W5N3OQ^|0cu1U0>+z(WtqB.RD|n[Q Cl7uq{Q7R0' );
define( 'NONCE_SALT',       'Z_j&}hOqezN4(RH 9A~2x#).+0-J(]q(} k^Ey=aRTRjv}sYgg@LESXFAmG/X`P!' );

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
