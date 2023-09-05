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


define('AUTH_KEY',         'sw40RiFifR9VoWfG9g0cA/uNsQKIxK3vP1mMs0O552B/3/Y5OMmVVavKgKYCDoapl7obXUTScfYPRLSmtGpjJg==');
define('SECURE_AUTH_KEY',  'hbKyzJXYki/NuwZAafCZRK0cBXl4IK2h7ZVLtdvMhcldHYXnAo/tZbiLWyj6Vv+OS5WXKdEGYzShmRgmi56khw==');
define('LOGGED_IN_KEY',    'r90tokPy+o7h405HZh/o9Pwp2w/WUFjDZelbGLumodHewkgmNHBHYcmeiMCNEZKBMyLc7CYAeg2OcV39Q3vFPA==');
define('NONCE_KEY',        'kiLPDl/RFj5pm08ZXojZIARy7Hv+vHtPUAOGuHhu+LODFH06yL+7ILSe0b+DPfKtDMklcwI9VcMKqU6v0cVIVA==');
define('AUTH_SALT',        'MNM5gqC5c532jSfwcbrXpPR6vVbZkP2wQ9UlSXfm+vgytMrzwdgyxBLJR3RwAVqlKfz1FuPLC8oZKyWfL9l7vA==');
define('SECURE_AUTH_SALT', 'hf1onOP28ZnruzG4CyWF7JGSbSmEaHmLJ7eMoUbyJphRwP3eM/Wak3MSxQtaOzjiHrxZsn5lgXAJD25EpPPyiw==');
define('LOGGED_IN_SALT',   'EAN8PLPPDjTsq+k/aSOd5eR0z7TUNXObYh+D0Kc7Hr02xjzgRc9k7bWie0tVyOgflxYcVAB9/rSzQZqkl/eZAQ==');
define('NONCE_SALT',       'qMg8OXoeH8EjKuvrOhk/2VLu1nYt4Cq9cOQC8gU9fq9Q1hMobzSG8tFqPLGd05ZMXJRfw+ZBPEjyG+T6kHGf2w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
