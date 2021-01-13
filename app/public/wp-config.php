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
define('AUTH_KEY',         '6zpInkll/TNhLgjDgTVqcnZoOWUdtC/k+BEgMG+hzGLzpZflX6OJ7r7xAMEbT5TUin1BpIfLxWp2UDyPR/L7CA==');
define('SECURE_AUTH_KEY',  '+0AoXJuCwqeSNbZl+r5khXelgjWDLfoU3IpzVTbklwII6LoI8vM5vx3C+aQA1m8T0amopwixKXgut8bwsYpFnA==');
define('LOGGED_IN_KEY',    'QLKxG2S7zde+AVI6BddYyFfLPqeBxggkLScsy6djCdXV731asGJuFTJlyi4syEsi1TnnXQgRhWHg3xtrXfpyqQ==');
define('NONCE_KEY',        'Az/UZxADPW3AADMKBkBvf287YsG01J/T6N7yeqA8dY9wOD1gNQDCY5u3Cwh5lYqcryTxBd8JAMeAaLZRGCrurA==');
define('AUTH_SALT',        'LixBeF6n2Rj7ag6ovBDejPOGNWNSrT8jdvvJysU5laWejKyBlEkZ403ge5zra8l2sgTTs4ScGZlJi82bJ9yB6w==');
define('SECURE_AUTH_SALT', 'ixc/FvS26nvpcqSuRLZw7knR6LxBcTP9g2FR5EqV6H0cxIsj6YUI0KKRu+0Zw8WODmWtAgdfPqDPvQHw70cNqA==');
define('LOGGED_IN_SALT',   'b/waWN16xXsolr7ID97dhwYJep5W//owKHS5WPabKirOlrrq3sms5je65v/pkPkmx9/uONGBG2BBXzxpDRAPkA==');
define('NONCE_SALT',       'gY672iecH9ANpfdEVHCuN+7rvYaR9hpg3WDRiGzIFygWLNgIkmGmdWQF/SkX6j+acaKZ+ju37i4r+dYrJJ8yeQ==');

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
