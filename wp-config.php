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
define( 'DB_NAME', 'gestion-garage-db' );

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
define( 'AUTH_KEY',         'j3r4:dw[F S;.M[#<W4]zD}drM:/0(k@R9X$_Ki/sFYPtEGvy5XeA@N~U^)r>Sk5' );
define( 'SECURE_AUTH_KEY',  '7P<{KUh.;^HS9/7HcZj96[dFJ_;TLk{olG-QKVc0(ol,%~RJaaV4B|tRlm7p) _u' );
define( 'LOGGED_IN_KEY',    '&!NQSPe%~`R|QPvZm424fh2q|$hz,})@cTw75Pu7<Rt^rny^_Pkr7@uXJd047*ro' );
define( 'NONCE_KEY',        '-GRM;d4<_*?^3=5VuwWUhw|v-pM]nJ@f+!`4Ccv9+VE<_(OZk>WDaQuduNa,JHO=' );
define( 'AUTH_SALT',        'T_8s3@~<.GN<0> )n xxLbH/}9BEweCR`FgdSSJYhvW8Pev`<p4pnLe@y{j6&mqD' );
define( 'SECURE_AUTH_SALT', '|I?eoLpzQ-11mmW!DCkrIQ$H?tl?b^[vzhitaj|Ua}2^eQ;*!?`|aRT[.RYR96)m' );
define( 'LOGGED_IN_SALT',   'QMqFR.CHD Yefd4>;|Fw_K[Et8j=#E`I+GfB*cAA)NC`DalD;FG8~jq*Mvk9}5!5' );
define( 'NONCE_SALT',       '>M|&pm~Jd&rG;@{UA9oB0Z^WgXVm-{bp2:Ag]_^z:2IiATN%aqRgIvcXQ@X{X?V4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ggdb_';

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
