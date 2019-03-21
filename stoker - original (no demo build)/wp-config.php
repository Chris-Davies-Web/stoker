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
define( 'DB_NAME', 'stoker' );

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
define( 'AUTH_KEY',         'JLB3FvUGP^*1i-zkM;I,GB?![vC4L|?>R(PpANnnwc#d4|mlU!N&RZL%s8&v& #I' );
define( 'SECURE_AUTH_KEY',  'G`y$XqvJ4gJ]FUub?Iz?XUlA3[x,G)&dgkp}v:e}iJ]9C`xR:{Ff8:M69qix7-p;' );
define( 'LOGGED_IN_KEY',    's/] =|f(*F=X VJ|M>z6`}H>&hu$y-q^=V)i]*tVZ,H -|T4oy,0W?U_a2!mXv%g' );
define( 'NONCE_KEY',        '1w[yLezwxmaK=e~vL_4z7of|E?m2N#XN>51 h3CqEo@gimj5]KulhN!yt&!7S_;[' );
define( 'AUTH_SALT',        'h[+?h+nc.Bk>b#?$Ed/n9D?4N[!9r6[f>lN|JP9#,T.p.&|=@j]ZrG(P+J!rhdD%' );
define( 'SECURE_AUTH_SALT', '} 5#>JV>/g3_LP]Nzepl*6f%{n~FC&1k*2f*tu2QKPFvaa1e,| Vk;JN!eV2SMiG' );
define( 'LOGGED_IN_SALT',   'r+!r:D2M@bdO<ihMh_x6K)X_;$]@:?sUvxv~==HEWiExEOMnn3|0!q1:bMfBlkeB' );
define( 'NONCE_SALT',       '{UvluJPvavW0nn9`[J[g^:r3m 3yP^Plu:hT$<w$GZYK!r;3SqPkA OuJy)unc3I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ls_';

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
