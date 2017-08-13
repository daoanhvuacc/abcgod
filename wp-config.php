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
define('DB_NAME', 'dev_abcgod');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vu@3389');

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
define('AUTH_KEY',         'w&59s-DGG3-,jIAKaK?PuWc@j3]{FWt8&+L.AcFM73pDD.,5n8EM)|H5Y+p YE%;');
define('SECURE_AUTH_KEY',  'texAMO!4K)LPL]3`YedBEI<jM!u4=HcvxLsDK:A?U@d4[@FJ ?,R0V,i%tb:iJNO');
define('LOGGED_IN_KEY',    '4*Lz*e3p}|.D<O{KQU>51d?mT>zYsF]!A`P@^8x<t)xGO`ozsq3s:q+ItJ|+u{(6');
define('NONCE_KEY',        ',g,LIt;hU${h[-._wW;.7L8z?4AI*n v~Zx8a%MJLMN.l^OK#0:e]y+r7z~:ix$>');
define('AUTH_SALT',        '~hUw$*E9ct,4Xwh24e91B^ u/1A)Z/w^6jDm9+ Xlyb3{0Ael[Js-CiB{1vELCrw');
define('SECURE_AUTH_SALT', 'V[P5:nY(d`N3aXPscP1Wg>/O#~JU0wZ9;6enaWi|A):kt|5&}5e(~.$i<`GyoP+l');
define('LOGGED_IN_SALT',   'W ]bCh+$*]fi?fuI?l:2IJ99Wm|eUaj_qAyt?0(RB;B(A0:?qe.1)+>1s{bpbCD{');
define('NONCE_SALT',       '^uX;9YWEh<uFjIs{J~%LYvXQ2>6jd7W^PH&r<|vQI9,LTYY{P?FD<$aHs1[n[8D5');

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
