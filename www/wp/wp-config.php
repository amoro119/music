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
define('DB_NAME', 'music');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'gYl((CH18C1#G_Y;y?k!~.r=Cq-asz@D^]XPsbT:l2$0LU]S:,]lx}a|o*)*)aR?');
define('SECURE_AUTH_KEY',  '/)ENL-sYeG?><VMk5,n0 H%6?+yHw6GO1:OdPy;#|6-D>5x<1sovOA7YKQg)g~fo');
define('LOGGED_IN_KEY',    'jKkip1wF%k*jj5cAJk9Sc-^O ~6r?I(/PuP*aH3>*w ^/L?_TN/ fT>1G!o-8@[J');
define('NONCE_KEY',        'aWgo]]8!7~sBp_qU$xd>Bx!I_rds,s^D{ZqGnt3*Z>|,E>2i3oz|}_-E*Iy)&*TO');
define('AUTH_SALT',        '=WvW5JrrwT4G.0QH_,+`?c%Q!L*G|8;rl?mRM+#Joa:!O8=N.DBPj]~WUDdU}uT]');
define('SECURE_AUTH_SALT', 'JbWZy.q|!J@0C)!k+HGPB+6%rQXpmG4T,Hdr?S}0;D~uT>!l)1_NO>;mdmHbDQ/}');
define('LOGGED_IN_SALT',   '0fGpcK)7L$g][T0Wi8}AUsyn[L.?[^;x^8jGOWm#l(>2WIrGFw{nEs/Ab{v!_5vY');
define('NONCE_SALT',       '+K`du2_uc$[avx*#?fZ]aN.bvo)V>%1/A{U`SQ+>SPz?Y;g~g4[,Fm&:dMo{ERot');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
