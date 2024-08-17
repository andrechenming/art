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
define( 'DB_NAME', 'id14346230_wp_ad0591840e92c860e8eecce6d1f9ce23' );

/** MySQL database username */
define( 'DB_USER', 'id14346230_wp_ad0591840e92c860e8eecce6d1f9ce23' );

/** MySQL database password */
define( 'DB_PASSWORD', 'e08d9e522242e456e64fe0eecebb819c14c5fe50' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '6Tx`xBCOow$oJ:-T0wRj7lhqqk_X,R]7q9axhegj=:*ly.d*g5&Q}M+[;b^jiWUR' );
define( 'SECURE_AUTH_KEY',   'U>ig4t}F`B&Tzv(:8Pe&t <=L> r2<1o1c_Z&U`6W=* IE^YL9)>b?5tTHNx<6dp' );
define( 'LOGGED_IN_KEY',     'dPB@Ayz7~YzZ_H]|Cp,OM!kNu&XaTM]luNJ?dC _<_!5Z8FWf%Bp2o54Rdc%PS~^' );
define( 'NONCE_KEY',         '5D)5KhUl$?{<35t-| mh845c?TFna^k@Ru8rG+h??.E?#fh6;^*x0UCilj7|KK;z' );
define( 'AUTH_SALT',         'K}I;my 8H2!%I_3l2Y+Ez^BK+3,IYR_M6wEd%PtYZ{5!A!,[OjxLf%O{1R*zs;,Y' );
define( 'SECURE_AUTH_SALT',  ';VO%oGFtg.:1f:KZ(0QsD|J@7/hM|WdE1Pt(_vmS74v)4-*U1G@UC,j=_8$ZeENo' );
define( 'LOGGED_IN_SALT',    'H/65q VX{<SSh3szM_mqjD^#]x!qa&*st<XYA-+5zDAA]X)/^y?zmfsWqQ;B6fAN' );
define( 'NONCE_SALT',        'C@!akGU,,0nTDG{NX3r+1!J^0?`(G%06nx73s(4L=K5~LYCF?I:T/I5Cigz>6<]4' );
define( 'WP_CACHE_KEY_SALT', 'IURVT ,I]ySyU+d-+>]KaWSUj[Y#;F8,eXI9Ar4zB]Fe}u;.(&C<bDHSN::{OP>Z' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
