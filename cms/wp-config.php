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
define( 'DB_NAME', 'cms1804230' );

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
define( 'AUTH_KEY',         'Ve`@$iezFAF*-U0ja~.B/NFc;X36O[^Biqibb&DIRj_KOjCp8<nptMYOL9/32|2,' );
define( 'SECURE_AUTH_KEY',  '23h3 c%mX;fPHv*~4NUh@:-j6.HRX#FBEn?63}DPGZOdt0mK}mSYM?fQfrXbx=.q' );
define( 'LOGGED_IN_KEY',    '{y,CXbx/V&6VPRKF9/|eF:v!7dY0S[i7`;vg8zZo<6a,L3_lUB) 75;^RN0Q,Hk8' );
define( 'NONCE_KEY',        'T:i]3Z_B.jPy3]57Cw8+ybSN4$t==nB>#+H;W DOQt;Yx[t`@`N<<G^K.cI6dX>4' );
define( 'AUTH_SALT',        ')>~-&RE>n3Q32Xyx9@*@1xY{xC~3Vl3w@q2zS5!x<))Z%b<(%s#xO3+kPYL}CC+Z' );
define( 'SECURE_AUTH_SALT', 'Md4bSD1rLzwi[)a!ZM=U~f,9`K)Soy{sS2jK}9^$wB<N0#C pOndW +WM$PFKke*' );
define( 'LOGGED_IN_SALT',   '.ZDH@J9IB8j&5xsE6K%g&j@FwDy|IHRK%)|w&_PO `)132=CwL**&gT=}~gG&f7_' );
define( 'NONCE_SALT',       'U(FPxbE{Nd?gl+mdMmn:v[6}pW7YE7*r3>muctP~hPClga[jw>4:ibfXDBv;v~nJ' );

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
