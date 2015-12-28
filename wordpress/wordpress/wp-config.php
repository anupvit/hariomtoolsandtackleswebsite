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
define('DB_NAME', 'hariohge_wordpress567');

/** MySQL database username */
define('DB_USER', 'hariohge_user567');

/** MySQL database password */
define('DB_PASSWORD', '5F!0B037MPH_');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h[H6o&X*xv!:@!taJtjwtQy+Q@$Q+{yF|w{( bUMSOM-|C8y={J^zSpfb3-]Pa^8');
define('SECURE_AUTH_KEY',  'sStQ3|l%mICUKMgL@QyWp]Va|RR~E-U{H-X_z_1Q*Ik|1Y|FwV*wM]vt>K(}Ac>o');
define('LOGGED_IN_KEY',    ')50i;J@>@U3*O,C&==)XuDk481jZ)^`aa|I FHBM-W<jy2z&v{{F,oVP)o,p]-+`');
define('NONCE_KEY',        'U_I|9-rf-lH!V)duSOs@%9`Fm/~xis4q Dm]~sb0y55fr@*`!#(M;=LnL3a5T`m[');
define('AUTH_SALT',        'ywVq-Tk#OUNcb^7:{swSzLMKmo5G:7V@1g)B~TPSQ)Ne#ns9]j9ZGjQ[NY+Yd%CX');
define('SECURE_AUTH_SALT', '7]rz_BY!wL/+[4)`>k)JmNF~qr-j)vCrVNz=EJMAE:Q[Gsq.`pWTU;3qveP9{]% ');
define('LOGGED_IN_SALT',   'x<loi^k1ArM~wmJ|#B{!@Q3oK_UFJ-+01L1fUtg9j17QTCFvPkbPE?In!R?@5V~!');
define('NONCE_SALT',       'i~|xy`!QB(/a+&>C[t~C{Oji8,~LTkVR[Y/vuBwdEuk=bMy/ug&r`b40./CsWo[L');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');