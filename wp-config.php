<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'newsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'guitar123');

/** MySQL hostname */
define('DB_HOST', 'newsite.cqqihavuvnns.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '|RR0v3WM/7|DaF/>^~9rV]>ruC}+VHOh^@|VOuv3BF/-2G)$EGS2f]S+=+}JEQ+V');
define('SECURE_AUTH_KEY',  'g8vb-JX6q8LN*`MPlo#8_/?T.KGsgbuDSydxh<`>a>2+-&cNh:s6l~$_6^fN6 |w');
define('LOGGED_IN_KEY',    '#g+2NiT.?#trRf[u>|?*7#}&Uyx+:-9C:U<}{-#en-v@W7Cv$aa:emzDrgR<55fb');
define('NONCE_KEY',        'a-V~~{n 1-Qe+M1&Tt}4g&JYWs?b%@wucn,OT^N|VT7)C0,~Kj(.;D|$=]ve{!=%');
define('AUTH_SALT',        't-%vh5-^<wxnlj2ms2X h->Fzj+<56;kl%HKX68xHliI58K]QqSWW@plR#bReb-t');
define('SECURE_AUTH_SALT', 'Y(yCK{A (;ARvNj8=P+j3-m yBcrTpMdXvfdb<Q]2j*HQ}A;1|<K|NV5PPf+B/fL');
define('LOGGED_IN_SALT',   'z[[8hi`/ ?f.7MEFzqlQ9-GnD(WU,7x+PAQ`+p*P#>=fiy3i=lJlRC=e?J|UBKLy');
define('NONCE_SALT',       '#CdSsKI|-NbZePI++yx_NZgprms)lIIvP*uK~MB<c1CKB+Xgg,ek.a)w%W3Y1vH9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ecom_';

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
