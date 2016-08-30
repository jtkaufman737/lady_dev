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
define('DB_NAME', 'ladydevwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'o);}<e.u@~KiWd4J<U^BFUr.-U|~VxE>&viTRxOm;TS>0DduC][2}gC%IAG]MH;h');
define('SECURE_AUTH_KEY',  '|KFzKHH^e<Crpe&5m`X:;5:n^P^h]v^cH`E#sdmyC0#kDR{iaz7%smp6,3nB9qlZ');
define('LOGGED_IN_KEY',    'jVqA,eG$zuR=jlC2#)}pr+<H~Cu@M`]Jvpw%=u&ur-2T#ljrd|n{SO_vj|vj!O!{');
define('NONCE_KEY',        'D&&^eZ:K1cxeJOv4XzQP&r6QE+VdzR00;__g8wUMmo+v>isy$fbjXC?5wdA}#(lo');
define('AUTH_SALT',        'S1 6LAO_K9&lVbU5j:vPnJpiy[D<*!l+{ogEUxAu$6!pM!6jhhGI4QBBaO}V7gYJ');
define('SECURE_AUTH_SALT', '%LxK=/,-^`iT}c:>~pZFX)U`qC#2YGb.?J;O[O:NgtF]rKmM99m4(HU@,@9)%1dD');
define('LOGGED_IN_SALT',   'xdae-q9qt;, r}hGP :[q?oy %/p(NG~O863y^)R..2F)(@Ug4%SU7Al:V*~s5}9');
define('NONCE_SALT',       '5Ro/.Mf}qjB3U^8rHgDBg? Lcb2=ZY)fN6bWPOcR}rXKxP~cs29H(BP?u]m(DXwE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ld';

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
