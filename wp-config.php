<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gm4881_airdanceacademy' );

/** Database username */
define( 'DB_USER', 'gm4881_airdanceacademy' );

/** Database password */
define( 'DB_PASSWORD', 'i9kn%83A-F' );

/** Database hostname */
define( 'DB_HOST', 'gm4881.mysql.tools' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '*aRgSt)}7ciX0{@T,g_<@39L?X>;Xb,DtmjY7-x9O1mxR8_b|zRaAl^qn_y).gyM' );
define( 'SECURE_AUTH_KEY',  'T/xhsUn75FS([Dpv-79]aOE]GCDrv$mr0Xzx_+(&PwD[:oYEm|V4hnNdxmJWXzlr' );
define( 'LOGGED_IN_KEY',    '~{[@&!d4ms6?alZy_+/,{K:|p6=pBh_3<gj}#1A))~GF*fO47?`n6$oy&h?]D:u!' );
define( 'NONCE_KEY',        'Uqsw/9X:Th cMeLw:~tfaTJoF@xf%/z&.Mc`zg{JrBW@nXT/CzXs+GA}U6P0M-bl' );
define( 'AUTH_SALT',        'tkz!cd[L}s-m)z0sspSdwPU8NRx<HGVWmDjuvJdAuqlEP=&xH;`}MIZU&ld |6:y' );
define( 'SECURE_AUTH_SALT', 'LGNcwOGE=V[upEJ[L<&&e:sRu!u-*Y{0pzI5Awo!+W=w~83/;,/J!!fZfBp^,tg]' );
define( 'LOGGED_IN_SALT',   'w$M/u#axqU`^bZt9CV45]{<=DlfTcAPgd82L^whlX#d8Y:c?=wN9x/guO9e8?!Cf' );
define( 'NONCE_SALT',       'g9Y69Baux%;H2Kuh*LKOp_N$!}1<Fb:[St{wCvpA}$Si79i$V+ L?[`1-q=^PZ4<' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
