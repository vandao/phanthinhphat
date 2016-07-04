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
define('DB_NAME', 'phanthinhphat');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'h}0G3v|ag0gl~uuQ-E+]DsT14CA7F62|ty*Ox4mU^|&`R-1#p-mL|k-Z=gMKE[qe');
define('SECURE_AUTH_KEY',  'HbZ4wywa-XQo$cXpfuP%LF[f;x~SQULB./`8+#,63&?D(;bQuju8 f)q#8mt}<b2');
define('LOGGED_IN_KEY',    '!*49],q/H22x+IzBeOb],o{U|s>$pj4Pb?MA$my0cHW$|sS&W`Dd7u.lCcl?~@po');
define('NONCE_KEY',        '^X#hbgPq!Yq%^2V2)<3N$C8.DV3wzb7|:_5q^-k~JVj(5WlhVr?9YwtrQ,=I%!=M');
define('AUTH_SALT',        '}TD$0(|LC7[S2|Q+[}-=T<[}suNB7/#ZMh~TdedQ=@AzQuhE,7spenn-.G9 `L3&');
define('SECURE_AUTH_SALT', ',=^}KPD7!O:<+cgWm,,q6r$4}3p`IE<q~J%oc6^)aq2+|6oex|/4z^5Se!--d49>');
define('LOGGED_IN_SALT',   'Y-sg%G/HKP-|VLtJI)2/h}S}11V9-DB|1#P01J3.s_nk^`_[!?zDq+,7+9kpUZ]O');
define('NONCE_SALT',       '%*{&gD;.&65(J#ch*jv/K83rXWd+]4x}8ywg5:i_#g]0V-A^p5+lQ9hh/GI`<Vv}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ptp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
