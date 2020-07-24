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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'CFP-SITE' );

/** MySQL database username */
define( 'DB_USER', 'cheikh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Cheikh@mbow123' );

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
define('AUTH_KEY',         'MKOdM.C?:Iq6ht(J|f0cVvN/M@|iNV>pcY%;!d*r8qXY6x-}|:6bs]LdN!5}H>^p');
define('SECURE_AUTH_KEY',  'V-vSh|%PutO||OfW`#LJ-v4YYz|io2[uP3Tv.l|D;;(g%~.G~Ns+WoD%(@!lm4F-');
define('LOGGED_IN_KEY',    'A=dI<T@T)W1s0E7(S$iqb;+F|0-$JESStt|-kR$Sb.|!/7mUd m_k,pG@15W>&|T');
define('NONCE_KEY',        'S}|T^lC}lZ[>W _nR|]E O ^}3G>1`9}L!<L|j--0#3Dk<?(%,ET={fvGAZ/Z72T');
define('AUTH_SALT',        'Lgm&sES3<:/!_-OcOz8TksNVRTkqh[#j5G+ZP__f$mezn/9U_%[N)s|>G-r9Jd]V');
define('SECURE_AUTH_SALT', '+<hevA`WRx+9Giz0S}3`>w.Z:XgZXp[}h;SQ}OI>Uf!E1I+^ha7+kHUO?-(xS4Yn');
define('LOGGED_IN_SALT',   '+Tz*s|d<|7/t; <&;G|m2[H ?;Ic#,z:SHcGvY@b1W?}/%/wa[{wfjLjmR&;0cvO');
define('NONCE_SALT',       '|$3xB=,:b6yoJ>9?mJ@!(BIJ(s|-Gu3lLUC#u3zf)>Z^qjkpLyO-g%yd`+y;L7tJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ch2';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('FS_METHOD', 'direct');