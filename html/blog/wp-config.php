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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         '*RlR%TLbHIPI]<jWZTL3l0Macw5Y?H%Gb<95#us/Ov^d;I/(GeMqBVN];|caMFfl');
define('SECURE_AUTH_KEY',  '.Vi$|PlZhjTp~v=L&`<+c=2E^@,k_+`f!O+u++S}(b0LISZ31`p<N$jR^yi9* l|');
define('LOGGED_IN_KEY',    'uqZrr3{{ndy6(gL4.=XFu,0w.@kHz**k(.N<%i5%)~,BfZPw!%uQ/e.Mh:Zd`vIu');
define('NONCE_KEY',        'fK*&T%T8`}p^M3pG(M. Rm6KoVJ>V!6~z_7c@b4`+YwQUM*S<(^9j^[QtY+I19/4');
define('AUTH_SALT',        '0/v97MDWPr.9$*ukG6O?[eRp&V|wk@#@W_/>#7~HuBx.JmEh_IPE,j[q)on7{mk,');
define('SECURE_AUTH_SALT', 'Flzw1 }*,R^O@?!Gxr2e:7z4vvJhqNW/*eP>e^o<vZUd6p#GjEp_bl*dqn.KJ%)@');
define('LOGGED_IN_SALT',   '#t#$XEP=( 8LYj>^cez;h<YoD1K?:L^n(DXR~9%m%SC^d,9RtbQpr+8/Xq&vG^]d');
define('NONCE_SALT',       '01[lRcr&l98`3_p5:)De>>VMn(A@=`%nS95Y*Ri=94%r]NrVpq[8m+0}<hddqvNe');

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
