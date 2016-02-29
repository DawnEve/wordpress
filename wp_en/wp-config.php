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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'rfFL):(ufos+2+?GvXv T(B],F>Y}F&FJ?-@ZR j*HSJ<at0F+-8?NAvl!t$!g^{');
define('SECURE_AUTH_KEY',  'kFaN&eAfejGV`t;-B-=%Ob<(mY3_<|vL7ZyE/1if*+O3OCLti7Z+MbvQvM$=%m#3');
define('LOGGED_IN_KEY',    'J3V7dk- =@$,_hE#~C5y1VZjq-ixuhzhJz1JTKU&r@e@;,>vq$C:8t{dBABV@$$0');
define('NONCE_KEY',        'UH.eh),m==T(^+HLHJcZBB,C`<DIg^SAzCHoHtj#(-;^308J>5|7!N>=etj(3dFk');
define('AUTH_SALT',        'o.Jy+|ey+%c0.0ROATD!jCs{`}Z#V%!jyiC*a*}4JkFMl:z9:(!j(gBDY`PJnxdA');
define('SECURE_AUTH_SALT', '5-K$T0p!K2$x ]4N}1(#l(Fuwa0:-ZMJB^uiWE#a.+8uw+1MZ,yOy|mc|w<|Q?6!');
define('LOGGED_IN_SALT',   'nmwSRXOIq|.R,-PE+5+M$`Q_)hXtV/D|mQ+2n9WU4#kI[DgoXM-1p06@-=LLg >p');
define('NONCE_SALT',       '_/HJz(&>wU|(5&ZlGS2>@e,(3YiUUu2HM@Ro=E{*aro=sc+#Y2TYPT (O4dE/Dms');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'en_';

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
