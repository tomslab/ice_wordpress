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
define('DB_NAME', 'ice');

/** MySQL database username */
define('DB_USER', 'wordpress-access');

/** MySQL database password */
define('DB_PASSWORD', '0v3rw47ch');

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
define('AUTH_KEY',         'lCb??3472DDe%rIcJI:8TLFJ}8S5:l*m03ox8LvGwuxmh:v;v7:}.ff4O{NK3`&@');
define('SECURE_AUTH_KEY',  'q/|3zU39oEp;lObO(@(8g!-e8qtUlnD))So+iXZ+n_-TI}9N}ghv4uqVbn[HQ)+J');
define('LOGGED_IN_KEY',    'I#A>_+B_7,t(;4*>lm (;m3#zxLK%|P7,s+GesyPykZb#}Wbe&EWM4#gHW`.u-!g');
define('NONCE_KEY',        ',v+z:A7xVQe(UHiS?[K&6ow011TH)Q_Cj8aC={8R`)[e1drETkj;4+~+r$dwm5J|');
define('AUTH_SALT',        '5gJMjh4CxT:rK`Lz?+r[6R[.DttW-2`(BqXh!bGIQon@`N`]m[x3m1qN6?@R3841');
define('SECURE_AUTH_SALT', '(@=-{NGb+-Y!2[`B=K]Fv8,a5iiB+uJUYHo|4VgB*Q2.xO_R|h<+9BXv6Rx:Xh3R');
define('LOGGED_IN_SALT',   's3PP1q%Bv|um2B}uVNAw.bPq9:cpBb_+;KT/_,Iux9MIC{(.f&AjItB#L_XSr^me');
define('NONCE_SALT',       '=9+6.4{@RW7doIQ@B2C>dPZ=us4Xl4E;!J-jNb=4!]0N2|$Q%3EJwc5HLm(@&@#{');

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
