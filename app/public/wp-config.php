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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'owCzK10D1HvebQ657CozK7UACOhk0mzx55veZEvINYm950BhgOGxXwJAtzCcurI8+pXn0d+kNSeY5c3VggL3vA==');
define('SECURE_AUTH_KEY',  'Y1Ns+P53AvnkCbhkqOE9rmb7RG/DQjoA4XVK/eH8Gt2pK9puIl4YZox7vIfwcftcbJxw/qzKzQ40GI765j0Eqg==');
define('LOGGED_IN_KEY',    'xVHlkhS0BGsAXroODOeVuMcdUhfH1VFuM8m5Jbqwv9ToWYjF1DLFq5bD1hEhFu4QniXLuCbyh4ZpHPyLN+hmXg==');
define('NONCE_KEY',        'Wkewe9V/n1Qx3h8fiXcKUw4cC4oT1+ia1SvXcKOkqt2GDA22njgJzW9hktM4kUwQSHIqvTwPOAWRGs6tEMDidg==');
define('AUTH_SALT',        'qFFxMko9nDFvZPiXLMsLjcmB+Yec42Fc2dsPZJTmNSFeMeMUA02JXkLKhIuHmGRWEGeiWoc48k+dgnbn0Jhtgw==');
define('SECURE_AUTH_SALT', 'S49LweD1HsAZHC6xJ8nFhEWEAKgvN58g+4m0T4gt6FSW+xBQHTKa7ry7gktFbphDLwzLx0oMXjeSTkDlbGOeaw==');
define('LOGGED_IN_SALT',   'buhdb7dIiTp1ErSiZqvw5FLYytbVGM0bhRUBycerNPQQ13vYXJaf1VpDp/+FW1zNEXSVJ9yJc/EtzbXGmTaGEA==');
define('NONCE_SALT',       'twxdL5kYEAdI/Lapu0d1mZ1XxYNEXVg9AtQo1vQbwpMkAnVp8RZMj9LhUkiXsvAEisyV/XQm5QFRQp2jCVrzAQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
