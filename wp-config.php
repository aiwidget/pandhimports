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
define('DB_NAME', '_ai_wp_pandhimports');

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
define('AUTH_KEY',         '+@h+whmlf$b/D-!RE3D?~OHz!h/G_XJ#Zc+La8Ps]~hE}=ZN6<.]aEd^Lt]6(22V');
define('SECURE_AUTH_KEY',  'p{V^+9_&!7_`DD_0B+JTTX.W[YETdsLV/6_{.[-P](-94uj~kf5Z5OhK-5.,ZeFw');
define('LOGGED_IN_KEY',    ';:n7{ENEiKvia^gHZ*|+`?A)*!V=1?8-hVjO|+!Mog(]8<d-|_TV-Ad&b$We%EoR');
define('NONCE_KEY',        'WhOm_5]wckMB 18f-I6SAj.5A;v;cB7YBX5&U-G*c32$5k4oyM2XHSi,CfHX`yim');
define('AUTH_SALT',        '`Mx[m0j}v(oX=J}=JYMO_<5#7wnPd^ZXuUde4vR;FpD@PtGr@;K|H@KX+@?Unl!=');
define('SECURE_AUTH_SALT', 'a@P,->uUuV}eoje3s+`}h,+lhQ{DLUq|[;<&bIEJ-Y.W)!B{M|PB8~MrfX$c8*B<');
define('LOGGED_IN_SALT',   'ra*>MU]8cGgkI|)qz!~S+>F/R|(+F6+97MS$w]39hmcPBY#X3T*|,r8xuJg<0DX2');
define('NONCE_SALT',       'xZ&QeS8,QL0h[Wd! 2Z5)(nC{]|!(,e[[lk;p(N]}LSR5Pd*oeDAf3tp>t5g}CXw');

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
