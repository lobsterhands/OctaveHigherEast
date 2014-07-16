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
define('DB_NAME', 'octavehighereast');

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
define('AUTH_KEY',         '6Q-m3(m(-.<P#Be2tgI4M-.^VY+Xf7#2RKHSYP{cpln(I(=4hlFZ(c~6G#+Gh{,=');
define('SECURE_AUTH_KEY',  'iR|!(d~D;)J.|xz=^IK3pm==BwgM(hIR^g#2`5g}.9Jq_|cI_T*Mn5_ZS}dHwJ&x');
define('LOGGED_IN_KEY',    '+qs^Ko-1xnX}I+8:V+`p7a%KZK4tO%rTf8}I?5L: 65QLY|Gn@KvT*-| ZURP~.w');
define('NONCE_KEY',        'M+,6F+BdF%5`3%46hfZ.u<h}E RD:Ks?d4cO{t7gZOYsWEU&(J:wE=s:mH|xGp:%');
define('AUTH_SALT',        'j0z| V!XBG&6jvTIJ[C1zM?q-p6,B1eV@9;hm:3yjQ+alOlg:iSH:|ewez_(B0:#');
define('SECURE_AUTH_SALT', 'v9`cQ<#s$DCyiLOV!*+3fr+^7qtY)e6DYlxIq;N4/a[([|aK]>l%A-`l{[{~gQV0');
define('LOGGED_IN_SALT',   '( *yw1*wk+Z#I[[@Y=6zZd(/:])3&fv8ybZD!~c?xcE}=Sb63+|3&POsUcV5&Cvp');
define('NONCE_SALT',       'awR~GYv_Olp<+:J|pboCW:*)#Vcz&Vzng1_wWb>][:{Gi%qvi%X|kb0Z[p_0M&Mv');

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
