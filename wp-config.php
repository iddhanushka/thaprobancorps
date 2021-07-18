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
define( 'DB_NAME', 'thaprobancorps_db' );

/** MySQL database username */
define( 'DB_USER', 'thaprobancorps_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 't3sEXNqzql1*mWrd' );

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
	define('AUTH_KEY',         '~/UENbAv:s;WG@(gSc*&oL}+0?a8.T56Y^Qb0`a+X<_J6FF&:rbhOn+bONQ%k5|{');
	define('SECURE_AUTH_KEY',  'D<-FT%6!RlRV^|;m27&^14G~6C47&T); ;P|(YG/QeVEwQ9W|-)AeABA9B0>n16s');
	define('LOGGED_IN_KEY',    '5Fi~sB92$-QHy+S>FPwV:bZ-+*a)j]Qz]y+ MvY:`CO^+es<0&)bSr&U+4{jP?LT');
	define('NONCE_KEY',        'amju-B0Q^+qtM-L!a%QWK7Q||QBu-qU}HRw:$>@HbOCIx`w]m?b^H{>mR5UkYZJq');
	define('AUTH_SALT',        'm)qhYGyV^42?HiCLy>C}s4Y<]!vN>I,xz30Iv]zg&8/ri7^nkq!e;z 4aB^yO>{r');
	define('SECURE_AUTH_SALT', 'd5m3LXjvd){R&Cc>1i1@gw]Tzq~c-2Mb^s~zcBlw;X9qxPl+ea$CQbUR=V AB|tI');
	define('LOGGED_IN_SALT',   'd-4_c+W:+)9(14nsz>R5GaPDYM[UQp3JfKCYM)-E|>pD2Bc<Y-|N+[Gq!|<yXTAr');
	define('NONCE_SALT',       '`G.;fYUh$(O4E.wS(Qi!X2Z#zBjYV86|A-&MsklOb0BCBL3m,=}!HWL3|:n0ITz>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptc_';

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
