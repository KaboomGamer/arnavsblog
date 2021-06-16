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
define( 'DB_NAME', 'first blog' );

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
define( 'AUTH_KEY',         '?3eu`j1N4|XxE@91G8oMqoa%)(mL#FbA(?XIx Nr2~JAF|8iA0d~C4#jbFCBKJ,x' );
define( 'SECURE_AUTH_KEY',  '2 >> .P(iP#[8 [2=SIJ?G4*#iYl)gh#PtsP5)*J4>Q7mkph}^^.-SR~h:0f7NK|' );
define( 'LOGGED_IN_KEY',    'ZXK gBI:NZUsEc,1ZEP}.WeyyubeM1L7.)+)aXeUSv#+V+y,@p.BVfEM[PJ)aAJq' );
define( 'NONCE_KEY',        '^t%&T<bL)>jH|ROr=8*9LGQxPB2)F*U/U]Dq;(T8:WE4=I6xO<UC9y.`c7S*iCpb' );
define( 'AUTH_SALT',        '0iwv{8m~xNid.BrS>4LxL!rL90#H9xxIwh -zzW O4I^?p&DHv?Iee>0o_kVE/<8' );
define( 'SECURE_AUTH_SALT', 'DKvN_.<XpDN(qia,qK=woGPHuP0HW~lXtpDw0eb)(S2xis{b*K$K#qhhKh_j+|nF' );
define( 'LOGGED_IN_SALT',   ';1@vgBg/,A)A KFwA(VT^}Pb{&w{SmA=8yMO6qtJ}pu]ire|uq.sz]>%,COy5AM2' );
define( 'NONCE_SALT',       'HWSv[YRWie@EYw~k_ZeY]+mpG^DXdHDQ>rN]e[z%*?jo!iAE{.z#cF8s,fLVi.LG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_blog';

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
