<?php
define( 'WP_CACHE', true );



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
define( 'DB_NAME', 'u741415893_dI5cU' );

/** Database username */
define( 'DB_USER', 'u741415893_4EN3D' );

/** Database password */
define( 'DB_PASSWORD', 'PxtsMLAMhQ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'B~+M@a2fnLwv<&M%Z$fdg@F{cJGb=p}YRy<ce~Ov:vHpe=XXRFhlMV$)jD5Os|)(' );
define( 'SECURE_AUTH_KEY',   'bjkuBW)IAfX$-=hELx^ST,PGZaO|[vTdK~)3,,H!K*P? T$P=qo;GlJ%.kNe9jBu' );
define( 'LOGGED_IN_KEY',     '}Z[gBQc?e@7hiPq.vR19gQ:bvobAUU@+0YM@pn}#TGQ>:vp+mac{,{W}#YLG+L/&' );
define( 'NONCE_KEY',         'EVc!V,Y3-w?^xjTMwKX0z9JfRd+UHCFv87n2wxmc ! Ty@2 lE3Ab{m?7kkxEUfu' );
define( 'AUTH_SALT',         '}?qsxBiY/zTba`gnWh{t,thp &t}^2>j !#<J2k#.c8eY9VI*Wb:[-+qaaj/k~ZY' );
define( 'SECURE_AUTH_SALT',  'j]$Oz>s[_;89Z~N6@-%mg@d]m$X]:-(-AK_=+SSle6$NZ.-,A3)4}kdvAMS@xhf7' );
define( 'LOGGED_IN_SALT',    'L6Nen%xK.]N%;h|cRe|9ApaT96zZqI|b}21M_q_Ls:v.TG/:qZsC{3#d{CEgLmkr' );
define( 'NONCE_SALT',        'J3*J2P2~DD4,]D 5`LkK,?QZF@Ikm:WN/rNpV3iyTrZUH72/0ncDa1F+^ET7/8;b' );
define( 'WP_CACHE_KEY_SALT', '/7t@Zkp2]/l#6pk>zc>Qu-/i_Hy.H]U)N#16gix&qYwSr7& &O-@mBEbtzP+f6!j' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '0198ca891e3f6912c6286bffabf33554' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
