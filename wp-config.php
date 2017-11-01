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
define('DB_NAME', 'tech4lawyers_com');

/** MySQL database username */
define('DB_USER', 'tech4lawyerscom');

/** MySQL database password */
define('DB_PASSWORD', 'JwLnZT4b');

/** MySQL hostname */
define('DB_HOST', 'mysql.tech4lawyers.com');

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
define('AUTH_KEY',         '"ONuB#+884S~|z!U/Seo+hrMrT`4f6CJN`YfgT_sw3N%Ub?zZNT@Mc@T`Q_/an)p');
define('SECURE_AUTH_KEY',  'bH3)08zFvIdcxs9#iQ9eQ(x#t5xoFC&T1W0q6"$yxk7wPU?ENh)`B@+Z;FM^&pHH');
define('LOGGED_IN_KEY',    'r%F1D&J@sYOVrd6+p0o_W&2bLCe/P#T7Bpq0re4|WmFA2atn"y/cYLokHqjz#UQj');
define('NONCE_KEY',        ';g#Y(82yLH+yBoV#z:dj)+)k`y6ZBD$!v//h&H1Kb+IV^1u(7s6wfdaaTzf/*:s8');
define('AUTH_SALT',        '|piP@Hf@moV!w*~`S)g8J:NVZun)nPd?If93M6)IB0Ify&X((CmW5Y(f)QML*Q@y');
define('SECURE_AUTH_SALT', 'HOTFE#l8ADxOJ5/!z_J$t6)w/cfgW;jrt"?8u:kqi|pT1n_S/86g4f#S"ZVygM/M');
define('LOGGED_IN_SALT',   'L!72/%nTQl^1q7nC0(i5l_h+I;f5oVGV`Sgv7SMfIszKI%4w2RDu7cn9zS)MbE@a');
define('NONCE_SALT',       'B8b^hGEYmR7j3pK$T$MPIgE3peCKRyYX_PY^KmOXp77Ln!WTf@xVFay9(lV%US!7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_4zsffu_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

