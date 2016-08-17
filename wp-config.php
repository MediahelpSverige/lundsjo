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
define('DB_NAME', 'lundsjo');

/** MySQL database username */
define('DB_USER', '9f44edc9dfd3');

/** MySQL database password */
define('DB_PASSWORD', 'steel1992');

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
define('AUTH_KEY',         'MC4$ik%d:%+7n6|H;I{ACGcVZ$TgY3EX${~3Y_$F(=4XV6bO>2B!jk4MSv9LaIl,');
define('SECURE_AUTH_KEY',  'O~(-|XF 0N;E/s$ 0I|x4;w.jD6mH K;},?h;=s6mU$_Hf9P@Muh5$J$@#V7cZX(');
define('LOGGED_IN_KEY',    's)fLB/la;A:Ix58<!m)WX3Cc+QB[Kmq/ %IO?2$~$w(H@}Hw<RK/W,XjsM~CXO+?');
define('NONCE_KEY',        'D,xJ(8 pFr3&x,T~G:)AJDy=^ce:How~.Upn1~Yk?NC18wp!<K%P[i5]l:M`q^V}');
define('AUTH_SALT',        'A-v@CeCvmxhA?5L_r`kzbQHf( PS$!qU/~dt&t9&qIIuKY]Ox1?8@dM6gQ_W-4;/');
define('SECURE_AUTH_SALT', 'zZc1bTE[w-VqtD>1;Ug`Bi8b[H%DF3v~[ 1%@G.3L82/>3#4=Oc0P!|LH+#Ks] n');
define('LOGGED_IN_SALT',   'PGf,TT_]-/yFUU.,3U|,j?Yh0jDVw]^HnXHSna11$.#Nk{on|c;sdqd7|!JnQ]>s');
define('NONCE_SALT',       'vjgKC-p#$nM7mkTS:w!sA0a&.E sfk%-+jx4qP8xT,=y]|iVMRoe!CSfRoj8cv1%');

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
