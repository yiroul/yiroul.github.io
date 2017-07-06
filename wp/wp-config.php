<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'yiroul');

/** MySQL database username */
define('DB_USER', 'yiroul');

/** MySQL database password */
define('DB_PASSWORD', 'dlfhdnf11!!');

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
define('AUTH_KEY',         '807ja>Jb8!+!DcdNMDI7]Y=|{+~jbCB~n$O7dY-#3|KJsk< 0Mu:-a+UW9kFzgVH');
define('SECURE_AUTH_KEY',  'ph>Wo{92Rn*N2-+=.^[8?b;Nn8dRl/;]Waw]A]XW=||]q#&2D+y*D}(p45bB }hB');
define('LOGGED_IN_KEY',    ':_E4)ad3438zy<(G7h5(&-D`A0>(|pa5kB,}E83chmsSaJ4vfJNEG./UOz!L<+5%');
define('NONCE_KEY',        'HxN1.<Z/=SSgDZ/Px?;{cGb!95f#&sDaiQdup1Hd.&%!6T5!#uZeN4M|mOHq{% [');
define('AUTH_SALT',        'dU&4D3@RNzRRa<hu7e*1v-.}6W~G-D+.`<NTy[-T-@zub*rTr8V!,Er)h+px_zch');
define('SECURE_AUTH_SALT', 'Cu;U4X},][es-KebjZ74o|L?2Ws.[0`oMpvZ:f)%#ZGk@+?i~;tjA2d05q]!-YCE');
define('LOGGED_IN_SALT',   'c.qmBc/%Pa+$ w-]$1E[Ws+N94m.T%X|D+#yqE]R!KhkyKk|N>20!k|6&m!F_UdU');
define('NONCE_SALT',       '@Ni<XZ+ fnYDm3P!+Vw:Z3pi|lL#%p?xu!Ahs ).}ag|NlC0g|w]Me*6||A*lg&P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
