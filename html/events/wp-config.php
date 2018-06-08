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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/events/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'events');

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
define('AUTH_KEY',         't]k0ZFD{GKu+`GSV:t`,<i05CtaNJo9y.Q3!n!_TFcZ|EfWjo/UD?kbu@?wk4 `G');
define('SECURE_AUTH_KEY',  '96Mq&LX5#wXnL-vEk#=TtWP+Y6tnOuI^&Hu&>1s9}?x%h[PCE3(@h84?MVu8JQr-');
define('LOGGED_IN_KEY',    'g[.zP+ng*3&kEC04_xi25GDhaX(k{cb{-cW(<d5U({>+Atqe[:q6:DN&5?/(CGiD');
define('NONCE_KEY',        'jrUlsjIQT`_{TwpAMU};.CL={$YUTm~S=`d:O*p5SXf}5Va`,},GT.:K?k0>)@!4');
define('AUTH_SALT',        '|C4?3&TWn:9`84B@_H^E9uZd2HMb$LIgJIBeF~N2j!Fx?lfz>-O8|]YCoZsmY=1w');
define('SECURE_AUTH_SALT', '^oM8raD.kG`=olJ(-c|su8zpbL626^@XjVucd>,:tqCh^#33jE!NrTUy:ypgM]eT');
define('LOGGED_IN_SALT',   'P!OqUGmiBx+D8[D~Ky1T0N?EJ[8J[l+]N:dmQ1p.dvSO2;-b.fd uIWVj}:Vv8&J');
define('NONCE_SALT',       'bLu^.[d9dw.o[72||kNzOqGJt:4lHT(uN#t>.!?#UYF_TuyV?2as!S]D0y]1,lw7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_events';

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
