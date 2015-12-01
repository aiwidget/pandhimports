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
define('DB_NAME', 'pandhimp_wp1');

/** MySQL database username */
define('DB_USER', 'pandhimp_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'J.f#UVD65Z~NsdH1oz]42(~6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'PrA4pqfVUajh2Tj27HWI1jX2Coq9qTvufeujlVeJdww511AkR1lzJrbvimC71pKV');

define('SECURE_AUTH_KEY',  'HBddLNxc8gDM2NbQF7B4yjQLijby9NwkZfxX3d28LvRBjM0mX0Dssw0sddN3zir2');

define('LOGGED_IN_KEY',    'YEZqNRlFe0u3ov0wKCR9ZuKWVlXMF81PC4daEkGGLbjQzVG6caX48I9wYmh1wJ3C');

define('NONCE_KEY',        'MMHlSH9H3OYcxOTOMsUBpQoNBxEsPdf2X7SenDqC3HsBHcQOgs8pwOUQc8vwNGB8');

define('AUTH_SALT',        'gtoXhvWpqeQcsVOQ9UR4A1EgmwDwBfXp9MqEWtwB0RniGc39YGSdpR5qvKQ3LiYQ');

define('SECURE_AUTH_SALT', 'x0ZKPaou4aP2kmCDjpH8ZyHLtkf3cvrPDjyhIhAtxvcZQtgZOpj7mdA4MAwBzynS');

define('LOGGED_IN_SALT',   'lriakPTfC18jh7et5a9f3CDSs0hfYesKqjC8GfpIlfcDiiHdmeFhjNWFlqtFG3Qz');

define('NONCE_SALT',       'JXCkskUh7l8K2nm4kX2o5GRhspR4kJuOpd5LCYIW2P7sGmNUp5XOLbmUHPpgpLo7');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);



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



/****
* Custom added  
*****/

/*
 * Please note, this setting may not work if your host does not
 * allow for increasing the PHP memory limit--in that event,
 * contact your host to increase the PHP memory limit. Also,
 * note that many hosts set the PHP limit at 8MB.
 * Increase PHP Memory to 64MB
 */
define( 'WP_MEMORY_LIMIT', '64M' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');