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
define('DB_NAME', 'amantugnawat');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'discovery');

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
define('AUTH_KEY',         '?!C+4]_h&-(0Er__|y[~C]9VjIE ^,z^k|YkWA+$nr{,C&Q(Q8|9bz{_U(YUvAuc');
define('SECURE_AUTH_KEY',  '/;D{%OG]Sl&5J2Lw)U}G4a%|ge#3(;J_.}m7J5Af<^r4=H+0dX/hKD|>^YD)Cf)a');
define('LOGGED_IN_KEY',    'Qm*}})@Zmp[0A_,a)_M6{70X)Dk:e-.cGJE;{Xp@@,mMe_VUQ^=:0<>n!Vp5FT/M');
define('NONCE_KEY',        '1Z%quYze6&(_S@6 Q9Gv(weiebI/kUBnEecMkYvs`/DJ(&Y31z^PB1|#jQS4%3CC');
define('AUTH_SALT',        '&ZZ^;iiBq]AY`Np]<NP{Q%|aWxk333Z<G8s7`DY* Wm&b=*e2{{Ap7<67O?v(tWK');
define('SECURE_AUTH_SALT', 'ReL{#7WgS9*69Dlk9?+oY-Ft*5,n6:LM_%$9ai09{n~{kU-*[/Z%Ka:0vXNR*7!Q');
define('LOGGED_IN_SALT',   '6K)qv**7c/MSrNk<yc%a7xINvO<*JN141vIfkr{|C+U%?n6iZ=GyA.Ztsm$pK}>Z');
define('NONCE_SALT',       '3e3jC~s$*cA6$],+*:f#&kS{PM)>{}|o7y!,=np.bU_>|;)*o/3mwbRuOCtGALj@');

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
