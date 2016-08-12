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
define('AUTH_KEY',         '[wV3#kCESQZqtIEV3Z#b.7e-3faLKPm6Bf@@a{B@%1|]_!(7P=|lI,C]m<7,^p{9');
define('SECURE_AUTH_KEY',  'A}99bE)!3~lnGZTX5#3w,]s3rPIlMNn}i;a$kAdkI&AxhHiNp7YA[Hh3TUCzV<3n');
define('LOGGED_IN_KEY',    'tB859f@E>[c?fprLE&j{xz*Z+0Is3]OZ;lxYg#vzYxy$:7y%%@OE9peIPhr/9i=U');
define('NONCE_KEY',        '?l?dX@xT&V;c`I2JK` :X>p^BY9IjQjV7F4>AwLi?hq2Z%/GuKewrs|3^3->,>=k');
define('AUTH_SALT',        'kHF?&?KVTa#Rmp[NX&6nB8+j<F;oykvQ-$hY)E@GvBDiW}PJf@;!k:]{ui=]:XzV');
define('SECURE_AUTH_SALT', 'D4oO6{%%{1;AXP`IS)o83oSkE=C9G$vFLv|Z}iu+aW?Js!x:25,:p5AGz_1WX2zr');
define('LOGGED_IN_SALT',   ')`1T!.0+P.o#Z{,2ig2M4H=*YEnEwH<!%pa`hhf(RjfVFMSh^Zm>|Aoz <L9LH9]');
define('NONCE_SALT',       'PxRA041DfB~dh4 Oan+.k5ebGZn}K![dxA~zSp}_N#CXs|q6kT[k|)Bie*`g;ax!');

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
