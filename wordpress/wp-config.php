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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',          'aUfE>E~`NLzaYL=kQ|KDj35bH/bk`Gi/PC1p*$Ud %Sg%[.hwkwPR2StJ~VflCvZ' );
define( 'SECURE_AUTH_KEY',   '$TW{Gnu_t+]5$r+SrD5<z*Y*})hk0s~%v9,6gs*$}~%pe^?L3D!,OK{tLN&$H?oL' );
define( 'LOGGED_IN_KEY',     '{ Yu(|sN43{;>+IX!@zHY!8Syo]YL>GPZ3*a|?=J_+Xt+e4Ap2vAmQ=1;T.Y-.dV' );
define( 'NONCE_KEY',         'D~]bV$XH G#pph5W`rLAGP>Qn+.EEN&{.B!uT1mH<nVj s^1cm_sj7I[ NCi<*YA' );
define( 'AUTH_SALT',         'ZBEx!p/*QH|I`(0XOCTzv*J}gMpbsIIxv2jJehSCWj4H5l=-7Fv)dR/W1DLg{a`i' );
define( 'SECURE_AUTH_SALT',  'VH&-q67I&OEpzK6.pWC?CG[YU3>zuK-Lu43P7R%j%{HCl)o3%9u?zBNEp:*rM1Fn' );
define( 'LOGGED_IN_SALT',    '(f70XZ:OH_b00*(euRqf>b8fG2r]q_WtyXqH#Xk2){P0F2yA60!=^wX@m_H}_{~<' );
define( 'NONCE_SALT',        'LX>-~>dR)2`FbK+m!b~zUYPt][R2oljiE-5@.,+<`:9~%m_OuE*Ep-pG(JJ{.SmN' );
define( 'WP_CACHE_KEY_SALT', 'QBxb!!8^+<xTHD W,.,I&Rr8*YF8QNoj^4rj<DoUB:AJpy_K/Q}dBq&EOldmU$}_' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
