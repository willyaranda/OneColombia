<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mozcolombiadev');

/** MySQL database username */
define('DB_USER', 'mozcolombia');

/** MySQL database password */
define('DB_PASSWORD', 'rabTXP8vfTxduuff');

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
define('AUTH_KEY',         'U&$L0D$v}[4!>U2-[*6-F!udU4q2RN|q]5&~~1ncWyp$6cY|+b<m{e|U;[3uZ{5u');
define('SECURE_AUTH_KEY',  'b&$a:Pqg(5-AlvSJ !dkMK^,@L{keP<5NcB!L9fda%DDqbYd{wYKLw`]N7I!Q~QT');
define('LOGGED_IN_KEY',    ':R@x5i~Jh-#|q3Gmzpdl+cj@{#ch<w`2{$xhP+#;Jk5w6s)yjQ+sC5Y8*rA)9|qg');
define('NONCE_KEY',        '[COWMs<KU}@$_<o]CNEuei:%b+B=Wz[:pQ?@EA@cF;-UODY&|W]KO4zn*.;KHbjt');
define('AUTH_SALT',        'bIcJ^BnRke+2NglNG?wdTg4VMKa/-)?+H $^lBrE>KP&c=udh[q+t95W<},r|p^F');
define('SECURE_AUTH_SALT', 'qQ|@w:)=iT+i|#>ca/Mo&8yg][$UqD/}v*h^vejVzz/q(+?Gi;<4WSEPO4MjcVxL');
define('LOGGED_IN_SALT',   'c9bIIt~{_z5,|.ZYRAtJqXG-j:Gw^lUJ+-j-Z|?^kH{-|Mve*]m-MuvRY!YSYx}t');
define('NONCE_SALT',       'kC&pQs>i|=ZM3WP-FT((}fe7G`f]_c=RHOx=<?*X9C$xg~e)iA)E{>>4hkdBD*s}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mzc_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_MEMORY_LIMIT', '64M');

//error_reporting(E_ALL);
