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
define('DB_NAME', 'wordpress_caregivers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N&;#!+0Vee3#cjUS1TlWF$&TzI1#?`AP]a;(2eM~ !uW549,|e@QNb>LA)8Uc:HE');
define('SECURE_AUTH_KEY',  '8(zUUb0ZSTr &!gj/#WI2GAfKrC]E#8,C=&1-a{=kwb*5-!#^e7Ox(B[s1^r*xzs');
define('LOGGED_IN_KEY',    '}SY@sM@0_&n*IMg-2:Ph3n?*E5|6O<r/UgKPPw}-u#Jc{%N?8 vtC@oggDcW0_1b');
define('NONCE_KEY',        '|lg^B)ov%g^b:Y1ZT5*qnk$jXU=:s*/+s~}xQS4+#t,y}Mxi^vVy9j{4bbn.Bk2f');
define('AUTH_SALT',        'XSjbW&Yx6y3G@-Qa<D:2C]-qEHT@zmfYVuFe*Z1EBy/wY,oCtG1W5))$wU,O}0ax');
define('SECURE_AUTH_SALT', ',}R.chf=:_T6p{0v>K<c]oc8,C?BfEKUVjN?^bf,fqsM|6~wvu)vwCQhAW:D:H2%');
define('LOGGED_IN_SALT',   '<F(2%WrQzju9+1V!10Hk2P7JP`%uK;*~M+|Av:/!s{WGzs1QN!sbuRdL00/hO7xH');
define('NONCE_SALT',       '^.9_HYhFQXXlNiRmIAe8eD>yC1UY={e3-B.%5zuDqs7ooPVJ1/?lF-ggWGzo-86>');

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
