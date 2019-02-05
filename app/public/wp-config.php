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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '/wPQM9hj+xknopeaYQ2a0qRJlJCS/dz7A7R0ThOKaeYfEP5W43P6sfH33pu4BuWf4cZKJ4mPbFzAxfiI6Sxo8A==');
define('SECURE_AUTH_KEY',  'd4PZH9p5koHFLXbt/daPBf+oSM+n0KM3taSbBly2iUz6lNxXx5W12vIJMI95pmLIbH1K7zai5baCeYotmvsnAQ==');
define('LOGGED_IN_KEY',    'rrhmVrjrZxEHXI1ydh4ZzvEfuJXkxpZxc5cVYme8yTzQ/QmFmCv3ajpwjb8srkrgXN5EzyQVc0kVOq2UA5xhfQ==');
define('NONCE_KEY',        'jQNOUKLTjtq0ixGLQdEIflDIH2we/86Vd4GsY5o13SQ0dmwFcCh9OXXJBWBIzUxqAfUV3AwMl0wUj073OuOEgQ==');
define('AUTH_SALT',        'pYMTBA/ZBuv/1JaGnLnwDpdWa8uwvMmq79g0XguDc7cUEbfubOhvGiEgPo2kRc/+uYMSY2tmGpwbcioNjiCzsA==');
define('SECURE_AUTH_SALT', 'f/RbST5lsBfQAxisg1/Js8a0lSyGzjdHgMN3Pn7/flfypmY3jYX5VFF6FBCJ2CkYFMr0WwrQp+O0nWe8GB5AqA==');
define('LOGGED_IN_SALT',   'nTkImRmUw8THlNEHu7OWyMJVN4ZjHWzGO82RWfvQg/0Bl8rO80Wy5nrN7lD5OgXMAfPGl3RizITK71pdyBKKsA==');
define('NONCE_SALT',       '8fLYNU7jMnLCx8r2028eRVTdkrEF8ynHt9i5RsuDP8Z2mnBjTPn/HZcQgBzHKdRgvs1islfhtRwsXjBTg9I0ag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
