<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jVtYa6Uvlv7X5A7DRrMzJ7bnAebK7YFHsQoHOI2sErV8TDfzKamN19ovrM5q03jY2H9NNujxnRMfkm4tnn6VkA==');
define('SECURE_AUTH_KEY',  'gu4kYHHFICVzHaE9wE1yjEug+vbnqAP8EI692klM9CZ6tBWhCPA2ONsTfeKD1DmT7E1kE13QP9em/X2iwoWzdw==');
define('LOGGED_IN_KEY',    '9nsLjxPogM7l/Z1/yVcObSGFh0onGwf5VaEj9LRgFcif2neYFCnH7z6pjMNQX8XabfAaLp29QdaGK+qftyDqEw==');
define('NONCE_KEY',        'IGQHjAuJHCdPnHip7Bg7i81Zav6L3qxX79Nj/eNrFUFsDdxU4XR2CwB0khuJcmx8C3fiWt6oskOKAsHK7j6f6A==');
define('AUTH_SALT',        'WCl893DYyPP7pK1C3At1NzKxuRYehJQZOjDAABIhhmZ4nMgZRMk3haEYeqoVdi7DjDv4Nwlgx/TnKYKZYcc2Hg==');
define('SECURE_AUTH_SALT', 'Wd/CkYiQDW5WPwzfGdN4M4Ksyj38/bDPyKfBN8C90HXn4vd+xTA95RAfRyIgMDXTqJBLQf7u12QLCAEeP+DUJA==');
define('LOGGED_IN_SALT',   '2aILKiZ4viepEodKC9pGXLgCEGLLNmX/1Fcd6o/rNKgjxF57fJT7lcNVq3DLWxa4RsWcXDA7po0Juq6DS68Alg==');
define('NONCE_SALT',       'UQFZb8pBs+2Vxsskv/eT9za2dUyjm+5qottmCwlJV6Ods6dgP8+hrLr+jD8oEVYXq644lq1hc5V2POCAee4wWQ==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
