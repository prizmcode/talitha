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
define('AUTH_KEY',         'L837UIq4ATcb/s3200p9irD4PAHzlVhaaC7M31HSSNianqM5nRVZNFBsvu5TqQupPWFgtIA8u+as/+GYRXE+jQ==');
define('SECURE_AUTH_KEY',  'a5K5qYxOyruB2PpiGcKvVSyRPwEMX5RYfn+aOwOIi/2CHSsYTRLKy/cBQhqSYzo0qeNbjfkVw4ag9esjCENXRw==');
define('LOGGED_IN_KEY',    'LvQy/3YEjeB+6MJ9wmwmvsMYIvcJegaF2yBIOBYNDsKzs6gLRdIyqedkpEsXQA3pMwJBPL7LCJXZfMOQ1P30HQ==');
define('NONCE_KEY',        'w6oINTZxP9yBiPcApTUdKwPWewJe2xBramPpfkOQthAm87wgQfOKOMQDQYI0ABddEY4pjpGVCP1VSeJHzbKRZA==');
define('AUTH_SALT',        '2wIM8uH3+B64PCSKL4EapRZmwQuh4tS7mYStPtqHFcHKAnNNok1WHMxRobWgI8kpz5Cjc8eR3qhP1wxos48s6A==');
define('SECURE_AUTH_SALT', '6WYTEz+o9tDxzthkCJb7rOJdeWvQQ5cZgOgdLQB4qtyswcXh3IGRpj+i/CMt+qtCqRLmRjpaOUu2GsHNzMLP7Q==');
define('LOGGED_IN_SALT',   '7U/OWrpL6j9VFpr7zXkvHIPQ8wMdmEGEmZQpzy2iv55yC4MwDfV7NRo+ePyGnaBmh2RypKF93qdCosnZmcv2Bw==');
define('NONCE_SALT',       'ZnreinsMNP33IofnTQfko+z/vSQQfqZolK3fO4EZTU2KSM/Fn4Ae4ZqYM9LVCRj3RwFO6JQijvju7pylGSPriQ==');

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
