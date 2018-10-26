<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'admin_top10tphcm');

/** MySQL database username */
define('DB_USER', 'admin_top10tphcm');

/** MySQL database password */
define('DB_PASSWORD', 'tienle123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Cc.WlC,>v=@~6Qrprg2r@n! SDYOb.&KIa)3I-XkxyF,9Q_ry<scXt`=Rcb!fx4H');
define('SECURE_AUTH_KEY',  'C^gag:~m~)RaU:$OZqdBA[(tAp?:=7e,Z9&n-xJ^% G6gf^Q0{%52Tv&PoDLc_)t');
define('LOGGED_IN_KEY',    'y] vb{4GMA*9O u23vtcYS#;oF<z3dU SsdcrXl#g}][aBoy`>(%TJyaRF?5%+Y&');
define('NONCE_KEY',        'a#6iwg><@-cICa(mZr*cH;z(N`&T.H6GN/g4-e#7ItVP<<c@@Ea`oVs_R$]p_iPQ');
define('AUTH_SALT',        '0;-`;j6*fymA5PuL.rKT~X<!D>7TihND3FghJky>NSZRDpR!y}g(oL{[Vd~_2j>p');
define('SECURE_AUTH_SALT', 'U@BTj+d@KGGa3|Tgw0#{5Mo:AmkiWt}Z=aBUo4WphCU@5n>0M*1|DFBKHVJAJ|j?');
define('LOGGED_IN_SALT',   '8BQlRYV!WsP}],fj}a?*+H]k`feJ%woG/g4MlHtZ!^*[<M1+ed52?}:r$!/zBqAP');
define('NONCE_SALT',       'c3DIt&Bl$@KnQsd?:ExfN* B&ZwKpdE{5eX9BTv)O:+Gjx33`6que1ILZL$|3LDx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wjesp_';

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
// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
