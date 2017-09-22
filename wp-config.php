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
define('DB_NAME', 'freedomthirtyfive');

/** MySQL database username */
define('DB_USER', 'ljungstroem');

/** MySQL database password */
define('DB_PASSWORD', 'akjslomn09');

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
define('AUTH_KEY',         '{ZbE|Bu-@5EOW`8n`mVkDe1((wD>) aqWPVFk[=p,IP4hNMV}FFK-G848<C#aTkw');
define('SECURE_AUTH_KEY',  'qH]3?gM0QM]xQb21ibUTKeFYWeOd_Ao~2?B8As]DnTvPw%Xh^O<-/wfzwJ7*)TU!');
define('LOGGED_IN_KEY',    '!fa8>TK>D9>bJT_zREOZ<M$NFtF.$3Cz]K[(au`02JtSxmzl|Htn8pZvk-~aZ1N}');
define('NONCE_KEY',        'e*D,-MS{(ZNFl1qMP7!qOESO|!2>Tp!blUH5tnl}[/-p.S[)K 0MxU&RX,M@@TS*');
define('AUTH_SALT',        '3]hd4A6Z+DQ6PGQPB$J|_R~<v=bsoc.ko:*u+e=$c.4;zzlf_w>TV#O>X_6_:E]s');
define('SECURE_AUTH_SALT', 'Z=SVa/Me_4y:p:zEQD-nxUhvlk%S_iv?V~ZERK8I Y`Q;jk^8Y>RYj2<-/z%hx|E');
define('LOGGED_IN_SALT',   'g<iSxUamDw0LD=uX]9qJust:][GzWjLkd726q<V0Y4IQ 4@oytRyO&~O[hMY@3>C');
define('NONCE_SALT',       'i;_LyM5K(/TmlSof]U!Z4_-k/-$13mbNcynQq0R=;@&MXh [^_|=tiov/Olys1Rg');

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
