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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wp');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-^=W:iq~r:Y3E&k.HJ$^>#7Kg[0;=40V/O:*`.NGPLu<2-mNQ=$zh(]5*l`D _>D');
define('SECURE_AUTH_KEY',  'q<|08+48%?Nao!+y:]nE7}U8`8FBER@ )[7BxOnD*j-|M`I/::r-+rpOH]RoNg[V');
define('LOGGED_IN_KEY',    'XL~+V%l/<Ty`GSad)>UQsoeL9#f_& s3veZ+ns.nhR4=l[BD,%,=5XAeCB+,.~|:');
define('NONCE_KEY',        '{&NDAnpo@/m6Mew5H#GE;W 0 pVi&nV>b(E$.Ko5clN3c( TT=+M%O`w#3zC1/!Z');
define('AUTH_SALT',        '&i^Q9c}-hdMHMg/65(KHlRt%>S-+4JGgL/t|w[enJe9G1]]W>jJJko,NDq|(zHq$');
define('SECURE_AUTH_SALT', 'SD2.U83x%<JWOwq%3W--otK9I>VH`4Oc8B/k}uq6XeQ7UKX%{NzvArnSHch],I-5');
define('LOGGED_IN_SALT',   '4D_C2ZpQ/J~LbJS=/:]~^gsT*,^Ha5!5Y9oL!/o$EMs,@fQZ#Dr+s}1fA|e@A<m:');
define('NONCE_SALT',       'xB~YL{+G:OzeT=GGQ_dFhRF/Mi+GRMc+c2:Bm~|x)5U.t%Ni_lNeX?Yz^dVJO(#i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'igl_';

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
