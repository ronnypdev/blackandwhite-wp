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
define('DB_NAME', 'blackandwhite');

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
define('AUTH_KEY',         '+n1klx@UU% 7hcY4>G#RbqY#rgKohD4x&?,O6#5he9/;hBr+.1zYKJ9lpx]Vv<<=');
define('SECURE_AUTH_KEY',  '`^llVz5dt0X/TH<<^X3JUMma(1Y`Ycy<tMkB-wV/),3-!{k-6nIKsrcIy&V>h$8P');
define('LOGGED_IN_KEY',    'qRuG_tPcC*W_2:/E,P;qh7`<p8fx_F>Xw/6Fi*ZD[E?~!:d(6(T)!g%tYc]YRZmT');
define('NONCE_KEY',        ')ZIP]0!/~%HJa=?INsco~{Otpx!K5wE*5>{G2@)j #,-nxKna AAym:KMm=z1>9f');
define('AUTH_SALT',        'A`&r9{05dy8erNLJ^|v`>&9+5aj?,Hj3bNM]uBxf9jUxyplwkqti1piau*;Tl%@1');
define('SECURE_AUTH_SALT', 'J=s>Sa+h2*IDT$:AX^xMkReT //!roDBkRU%@iU:]*cqN:>#KW<PUfE:A6.UPy;c');
define('LOGGED_IN_SALT',   'jDSKk>=zflx6lM<:qF,D#qG1v@<#YH=M;aA%A,qr7B OD*2vhc6t&`oPi+hZ+Al*');
define('NONCE_SALT',       'xv`>DdFFoS^?9@#DW]gM>*:11q3~0+N[tQ}XHRVhv9m=X*hhfkdGCH5KM};dWXLg');

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
