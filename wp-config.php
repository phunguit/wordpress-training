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
define('DB_NAME', 'wordpress-training');

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
define('AUTH_KEY',         '-F1:120{1cp2ix!1?]M#-*e[ubk-wUnqTf-t+zA4AuuZJt?RF!fMnPJT=$Hu<%-m');
define('SECURE_AUTH_KEY',  '/sQa]ljF-sE ,x({~<<T=qo #Wlk,M+ES}~|-zhUl>dt+oW#)RwiF6R);^D-`KB5');
define('LOGGED_IN_KEY',    'o( zp+gr0J*G!@sI+UJJA)Op~/Gu{l_`o~xC{YRe^.vWcF%Xs4@fT0$Xbqo 0q+^');
define('NONCE_KEY',        'ZsmK>WZH~mRmzcz<>sH2u=,D~jqOv}b@?D4{tbLK-!.3/@Lr9@ub*fQ|oNK+6F1t');
define('AUTH_SALT',        'qsceYm%T{LEk%+]b^f++N0k+P^&aym!Wr+>B$kyQR@^xqT!uM0-Tr8GcTqs/b.>c');
define('SECURE_AUTH_SALT', '/m@zfPI*P|pRWKm#e&1~+k0Y`C g9blRE^W!zF@nV>X;nJub}ejWVPuL=pBQu19c');
define('LOGGED_IN_SALT',   'AX,&mI#?Z>p,@E_I&iw=YS{{1:#1Arb.-IO6Uniz0e8pxV`r8D8eq;d99gx@;YFn');
define('NONCE_SALT',       'wEOyDEu7&($v5k].z}{vV.jA+k}WVEp72=Jh6l*Z9g=1ejjAw&Tqx`y?&$P<hHJ|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_training';

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
