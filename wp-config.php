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
define('DB_NAME', 'valuexpc_wp609');

/** MySQL database username */
define('DB_USER', 'valuexpc_wp609');

/** MySQL database password */
define('DB_PASSWORD', ')Su14zp@D4');

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
define('AUTH_KEY',         '5nzkbqq2izulzgh3cvrwdfvgryp41uyqhiasvmys8jhpsglpe0qyzvd9hlcd7imx');
define('SECURE_AUTH_KEY',  'wblqhmmcpdvrjpnrpcvtdszck8gzkwuvyofv7cw1xlgqn9jqljz9rtsm9cow0j4k');
define('LOGGED_IN_KEY',    'k5e6wbzmafr5qmejybyfq1t7ejydwyy27icadpaxdnhydcknuwz1gyrzfwdm8or0');
define('NONCE_KEY',        'cka4kyr2qxh90vrmthzh4ngkoe0un7izb0ogi6lhslkw3qyutqsmjgb2ldtdhmrt');
define('AUTH_SALT',        'l7wwc70hbywsq3g1i3yunkxntsjqh1vjpiuyvlgtxveefhw9xzwtgervhbnwuadc');
define('SECURE_AUTH_SALT', 'w2a8be2oqypv1jl66jt0lanut4tm9f8qpdoql2tty03w5paezkoxbxvnkx7n5jtc');
define('LOGGED_IN_SALT',   'ml5qo5kkaqdzdc2mkqznvtgmsqzeycnru5ox6fqc29zyliphj1srjea8xijvo7dy');
define('NONCE_SALT',       'abbfttvsi68egd4ojetik9kqacpiryk8s8b0civ7vstkjka1snivpftszrtj13gr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpvr_';

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
