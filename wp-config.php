<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'trading247_db');

/** MySQL database username */
define('DB_USER', 'trading247');

/** MySQL database password */
define('DB_PASSWORD', 'p@ssw0rd');

/** MySQL hostname */
define('DB_HOST', 'sleekcutcom.ipagemysql.com');

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
define('AUTH_KEY',         '=q7CxTRdKu^|,:. p@:!V5SliIsLHDWr>Vyrm%*TnS{Ndiu!}+n_|8 XQkp%B[!#');
define('SECURE_AUTH_KEY',  '$fmtPa&PTrz.H2N:{-<.W;}pE&-r//O%8mcFL{]yG4fRbCBOSCMb5p:~pNz@?L?}');
define('LOGGED_IN_KEY',    '+kQ}42>S!g[1L1BLie{[K_x!V5J-3XU[.-eQk{(jHWWXq:DjBt:h}>P%U4!SazU`');
define('NONCE_KEY',        'y>}Rc%u@yr2#Qct*fm-1}p{Q|dB~mw1kf~4Bbx>cv--[B  8KO59Y@PhFDtR}c=D');
define('AUTH_SALT',        'wMxQ.kf+~B hv1i=dn*h7HP4?fg|g1%90&v*X i(!^-!FX/QG32+V@ 82W@D]Q1Z');
define('SECURE_AUTH_SALT', '/MU`$5[P562,9#5e|.T#LAQ|~{llPoj:j=D@mi-le-?,c*8]|+7sa4mLzXW+JzFT');
define('LOGGED_IN_SALT',   'lLOY&>qoLh4$8OY9v?[=StBfhW*|t)xR.tRb10RR]5u/Vx}3|r-WD|*|_{(+G0WM');
define('NONCE_SALT',       'q?/Adt!`r6sW.F{+mE@eB_nbI]BB&yr+=K-x(%(+[>t]vo$y3O{USLmOsHKR4%wL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
