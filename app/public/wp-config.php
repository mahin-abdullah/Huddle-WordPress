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
define('AUTH_KEY',         'Yx5UhrZxFHcrqEjwecFNYunztyuEyssuWNQ3+XedmBLCJgtaV2VwbXFzlFYU5+yivsdQN7fqhp7cslwAiU8MDw==');
define('SECURE_AUTH_KEY',  'ypxdjSlM36hzO5JsNsZiLu1zI9xsx+9nzXuZpcj22yXGz/g32s89GlZ65zPPNTlLn7bCKxR53ezyZpOJwTcMtA==');
define('LOGGED_IN_KEY',    '/nNyyKxAIclIT8Vq7Ya8sw+AB6Ta7IYLF8H/5Z4AhG5q8xnJzxpNLEaC1qRuCcMaxZRMDCJyP3QZtk5jCVz+gQ==');
define('NONCE_KEY',        'VL4P0VTV2KGICmodbl9zR6Wmv+fLtCnJCUr8hgyLw0GSJN0dyzjeLuv7nk1Gt2/BAbmsbkgVTnEoaPXwEHRZZw==');
define('AUTH_SALT',        'YtfsTM76yx4bdUbhL0cFACuSz5UTq5WwCmHBblNp11VGJ7riJ7+Ps3PlA12k/J5WOmDZU97trttlhLAK/rAW3Q==');
define('SECURE_AUTH_SALT', 'ClYP1IzQPgGa8YlTQCKukjSsvkzbTZ3/eojfrOo1ShSkqB9onFVof7foN72BPr6ne9sFPBzzqUa9CklqbWBo4Q==');
define('LOGGED_IN_SALT',   'AV9cukE4Kc5ihYlpSHUI4Eno/mxkFcia3w6zwQsWH9YGNxV3N5RnNpPFI7DH2mZV+Rz+K45UJws1HKX2lyQywQ==');
define('NONCE_SALT',       'XbKJrvqw2RHakccUsaog65EjzHgxQ8tdZPQl/v4BDR1bOrI/YjU2Wg2Y9651RPV7/drfowA/vXwZ8tnyIvHVIQ==');

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
