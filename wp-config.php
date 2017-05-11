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
define('DB_NAME', 'devtools1copp');

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
define('AUTH_KEY',         'PAdOK-f(R9s;iS[|HqD!UKKMiaeSAp?P3p>dN!dW6tkndcdkFg5O]fO2<2aw;Wfj');
define('SECURE_AUTH_KEY',  '%#kDrQrOQvlSfE40T3$# f`9lp AX<SP,(AF+1igu0RN?IH<$,|U6ftD]KbW3w+*');
define('LOGGED_IN_KEY',    'm.F9a|7g2Az/=jFVvZCv&.>%(XaM!=kdWCQv98bT}~%zlA}:S,Vee[R}&;!aF Z?');
define('NONCE_KEY',        '&r>y]]pOQS)|*Eh*CWghuTx+:P,EEe]t6W!9 @jj|YP}@+P)JyW/A.D+b-<+I.=n');
define('AUTH_SALT',        ' bYCjeTCXh~>7M*k0dA=4-7z.uddow_B|h55QWoqldYc9b)*3yED@P^`P-%#ryLq');
define('SECURE_AUTH_SALT', 'Eoe:eucoj2TX&#wVeh:6~U+ag}3IZt;cAXwM.zXoJQ-a:w.F.bz..F-A(C.X?mn~');
define('LOGGED_IN_SALT',   '4BPUni6YL`Z<9i!5O)Asu,9PJcjZEP[5}`FX(uC;S8x:+BjqZ7v%z%<ko[>o0PV>');
define('NONCE_SALT',       '3$=$C~S(,PSBM.kzi~j;9*jj4fc?mkoOXs#1[[w#6!2g4o+{i;g3K1PS@rwf%{pI');

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
