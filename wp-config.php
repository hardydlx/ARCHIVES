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
define('DB_NAME', 'ff_archives');

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
define('AUTH_KEY',         'EG0)3&~*X0cmT/|5TA@G^Y7)Cfkhl=,mt)Gi0gm-LPWs,O/Fu7;p+vxmHjA=2=RC');
define('SECURE_AUTH_KEY',  'jy^%nPqymUG[nsN/_WiG><+=Pd9{*yJvR9>;`0$kA*O&z#s[lWq13.T?`IQQfe$8');
define('LOGGED_IN_KEY',    'L7Y1ghKYX>A@4.je{G<=#(.Xh/uReJN3raHf1~v@MN4#LkGV#&_x:ES>qPi6C~Nz');
define('NONCE_KEY',        '(~x[wvBdaPw;>sp=0gwB(5Qrv+HlapuA1pmj_aM)IXNt|;4+|rCBW1|C/Eb+B?>D');
define('AUTH_SALT',        'n DuCLG1W2FB]R.i*X^O kRX/62rx%nqV:2s|IRHh}I(|j(1-25K<U+U6;`*la70');
define('SECURE_AUTH_SALT', '/=y*-jIy5h4^QA2?}w=4R|7i3K5{Va+`U;UNt9X@v`Y/+{vz,F:)J{v`&v$<GB(s');
define('LOGGED_IN_SALT',   'bM ]^a`d lSVJh,JN.hD7 $~U-gbc{>:/[:PZ%6E`WN4uW*?|6r;AzI{#)T@jJW8');
define('NONCE_SALT',       'e$;XSS9CxNJs(.rI/zCM$T]%Q:h6;E+^GVW)u!7.sgXYOP~lZp(AS!kB%k7Qp#Lw');

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
