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
define( 'DB_PASSWORD', '627afaf056abf1528878fe0f9dda1fb13d6788f0d926903b' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'O%.m Yr@7L,w?,<0er=),uOg7jZ;0$:*5,v`Quso8(qnf1<UleG;nSU[r,EL{^D4' );
define( 'SECURE_AUTH_KEY',  '=#$Rh]};|zn).2NSbbyw .%9/^+B&<?u(K^yakaJ*k]If>cEfDpF#o$Y^ay)HJ5{' );
define( 'LOGGED_IN_KEY',    '/}-dsbH#W{.JeEZlN[5V[(m(M.27Yjb<URP>bz?wwxT}^bMb:|rUo123D(ix01+V' );
define( 'NONCE_KEY',        '[QYIDn9;UZse~7/5t`/6;KnboI2hxeddFKf9SO`}J5S.w.F<OjA;/V6)f&-n]$<`' );
define( 'AUTH_SALT',        '|$pX[_fZ?6tpN6<ul15pS*pSK 5Khq(WDN*5]?zY%!Z>p=X!PTt@3]2_y)ox$QXw' );
define( 'SECURE_AUTH_SALT', '$8/)S=;@JIDqLIsIiEl0N{$oA}81 jeeBG7A+LLB)qw(`!V_:c&$]Bac,cOr*e%D' );
define( 'LOGGED_IN_SALT',   '+,icNC^%&6POkIj#M$S&cC.^YQFFK!-Uh]RWwtL/RZB.(,j(LbssEep[7u0C)~a8' );
define( 'NONCE_SALT',       'R`puUkUph!.xu^r|,/l0wr-)7a./N6Eq`7nK.z}-%7wrOeq3uI4HL,^KS]G!iYl6' );

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
