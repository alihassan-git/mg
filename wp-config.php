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
define( 'DB_NAME', 'mysql' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '3227433' );

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
define( 'AUTH_KEY',         '.:|*VxR2})Jj&-Im@,ke:_h<saRrPhmeMqy7ZtCHQdPYw;W8x7!#X(R9[31#1OSp' );
define( 'SECURE_AUTH_KEY',  'EV G75ecvWW#3ifqvc_u6Fnt]%+#uDby<e{Rp%M>:/ktSV4;gzKwB!^w4i1>u5+U' );
define( 'AUTH_KEY',         'A;AGg&_J7Z!# L}yY6L/Nfx^;*VAJJ#^O&Y&X{NxC`5O1hATI7<~$HdULR}?=skU' );
define( 'SECURE_AUTH_KEY',  '^x:H4,F0x?qU?d 4cqLbTvM,Xo|a;. }red>*G9bM-jLss[xYfod9 t:&qr:#K#E' );
define( 'LOGGED_IN_KEY',    'SREs;[/C3=-rKj2Ej9#p-ME||vg,A>mRCq6sT{H,*~u%+`]|`nRZ!s4/y^77$q@J' );
define( 'NONCE_KEY',        'B~ik{l=#]C?9f}w3]JqhpwKo&_JuNDY0i3A:qf0;*- 3ELzm895)Kx90-#ZC.|])' );
define( 'AUTH_SALT',        'm+2iZK&e#>]=hQXUOr$9uoT-LK.<*qxTX[QW|zN/0iT c^dnEdcWiW[>K[h_(=L#' );
define( 'SECURE_AUTH_SALT', '/VMo*:Tz%$hO(mFi$z[JV#N+s^BYpxV~q<`s[JrvE9hVAE:`Kmi$y[$z$pwwbh2Y' );
define( 'LOGGED_IN_SALT',   '' );
define( 'NONCE_SALT',       '' );


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
