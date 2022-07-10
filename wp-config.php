<?php
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
define( 'DB_NAME', '4mtic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '{A1!_~b)Mvmm}(vWAMM<?Nf0[vXH`j5>a!)06<~q4$;K#GCWn/8NO[{MXKDUPjBk' );
define( 'SECURE_AUTH_KEY',  '87-&<_X;_=S{4vS$%0OGiAkj j;S4A]#` =pE2(qBQs]HbEF/mE]%3={XjmRbZ8f' );
define( 'LOGGED_IN_KEY',    'q6&Vh~Lp8c1ui2a3{0~gq^)#vbKABU2dn; TcT/ W)qwt</0Vplw=]V4ewjo:mCb' );
define( 'NONCE_KEY',        '}3u]Us3hs132<J44|jXJ$iq$C)#+P#oZIc{[]#qSFZ2!)2^B/`hDjJ00xrwqdoqj' );
define( 'AUTH_SALT',        'Z?E08UeuWMw]xQ|4=ycblB6.IR)bAwV_lM}#n2cbstF-&TLzT|=BrjpmQ+03pf(p' );
define( 'SECURE_AUTH_SALT', 'SM;-I=1NVQd/4^f35(A5N8p~Lqc(>xWag:K,j)t:B8h5,AD7su]iXdr>`XW4Lo>*' );
define( 'LOGGED_IN_SALT',   'rkJ*%2H;Iv#CI;=wZnC_t/N*Cet k]u?tkG&N&s3c$1gEBYId{fL?b+&-,oFWpNT' );
define( 'NONCE_SALT',       'm1:oys~k)usp`(L@SI?7mp+9:A^*8cs`Kj4oU:|Y(aHOnX}6% pN2rk?U)+zD_L?' );

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
