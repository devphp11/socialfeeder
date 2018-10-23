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
define('DB_NAME', 'social_feed');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sspl@!23');

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
define('AUTH_KEY',         'Ks<zWr;)*7dOZxv*s+B8>e*4h9ZR^^aT` IG^(LK11x0SV8yv4lh2=ZQNF*fpvv`');
define('SECURE_AUTH_KEY',  'lSsKJEk6O]rNP8/6ewxUD)ClYDfb:l[(`ZnGwpHD2$,A)_-1iq]V],!#C8Jd$Z,h');
define('LOGGED_IN_KEY',    '#JS.3+OxNjH44gRg8<5d)kk|_MnIL!3Iu=C4l1%Qxq?onl,[pZ1Af/mY]1X%X0.y');
define('NONCE_KEY',        'aE*2H>J;{RIzy16qDQg-7guoR^?JW9x4J*aM3jU/4=}cbucDc]`VTfpe CozeI~3');
define('AUTH_SALT',        '#5S7O[]]f;|J8[, _`0J-L`DTaf|NtR:FE(88Z,6Jj~#ScnGD@L*qh1uJZ|1?s[L');
define('SECURE_AUTH_SALT', 'K0b@mEg/x__>VMVHtZv5CzS<1AaKP;Dy&sbkD5UzY-95Vg^2>+xBpfd|w&/SfN?i');
define('LOGGED_IN_SALT',   '?5vo_aKARcC/5V~bns|>y:ge.o/Uq?1[))$Ff+3KE&#SQ`U^`BB5F|Kv.I.lO7%t');
define('NONCE_SALT',       'sn0n j/Gk6ff#rC.Qq$xHCf 4u~hc`z?| G3C(d?MU^P=U gB{hJ}^qy[Td$of3U');

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

