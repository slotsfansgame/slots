<?php
define( 'WP_CACHE', true ); // Added by WP Rocket


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
define('DB_NAME', 'admin_heroku');
/** MySQL database username */
define('DB_USER', 'admin_heroku');
/** MySQL database password */
define('DB_PASSWORD', 'eKQN4CyN4y');
/** MySQL hostname */
define('DB_HOST', '185.235.131.76:3306');
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
define('AUTH_KEY',         '1UGs^sFVxmNoDEPID1cyqeR)OYhcCyiBQOmtg#H399*TGB8V!aRLc9*z09^BhTFf');
define('SECURE_AUTH_KEY',  '8M@ckH*jdFySoJxJ3)mlu3Nygz2orhRtwN)!ni5YUv1T&QkSzLbHD7x%nAY&(Ny7');
define('LOGGED_IN_KEY',    'v6nLR2*%(BQL9@fsGVdeuV(KhTBh)DERXxK3ZcjV6Ki1Ht(6PG1E3@hW)*EX1rxk');
define('NONCE_KEY',        '@3vMPrJYQQbL!mL2iq1y(JK%BmjUuS^rN(hel3gghDDtiYd56VT%FV6B1f2j)a!B');
define('AUTH_SALT',        'g75bGztglVxDb*30HNSFRJdRXhKdo60cB^EUFz9C(L0H#ys8QF^bIsol)kz%Pd5s');
define('SECURE_AUTH_SALT', 'kBcF7(k%A9NRd0q%9yb!LYi^kkNq5^po3tsnum%eKNk@rUl4&uUB%s4p@2mLh0qx');
define('LOGGED_IN_SALT',   'GET4MOnejhgbdaWtxJ3EbdNz2Jqs9I2ShUzd*WznpAPSiREpIho4W1AzSDdt7h%7');
define('NONCE_SALT',       '##PFWrL(cc3(dMqdBhB*villAMvVlmspT%WTT7pYtN&zF&G6n6i5*99Lr4&ANtl&');
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
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'WP_ALLOW_MULTISITE', true );
define ('FS_METHOD', 'direct');