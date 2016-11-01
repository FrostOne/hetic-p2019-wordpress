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
define('DB_NAME', 'hetic_wordpress-election');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'B55^JiIx<x#>(1DUbegc@5gB~rlcon;%]NI!pLa{L3+ ~($ I=&{ u(Z!odW02,W');
define('SECURE_AUTH_KEY',  'bpx/+Tm=YReHU=0|GBUsC[ll[l/XL:0nH>pfg+R`s^0Pu@=1>pKRnF3}M6pS]S2&');
define('LOGGED_IN_KEY',    '>;o3iR8R&6S>74J|F/DaP.Dj^ UCMw4JKG/h~NNh#DZ_p$7%f,Y?w%Lmq)LZ$c#I');
define('NONCE_KEY',        '_8cA {CidfC}A-+S]-KJKOLmMb!ei]Pnisy4y?dg_ak3B,CZMo$DeC)I//JX8{&&');
define('AUTH_SALT',        'k%U 7Lp#pz<Eic8Fqa~bhIm~7pt6=]y<rurib_34sO15+t1^ tD}cwE wB7C}Pnz');
define('SECURE_AUTH_SALT', 'PC}$31[Wv(_10Lk %!;=QreK3SxquE<.RS_R00ZgJYZRE#WL7UD],/AFc[FzIfx<');
define('LOGGED_IN_SALT',   'nQel2m5d]l8^QR>dw1EIdkje6vZgDEkiq Dy6E5C.n>m@_]!4.J$KuLPahkoHNr[');
define('NONCE_SALT',       'q b%56L+nvnj9w221U5Xv!25:A.>?Y1tmhVG6 (i,Y@i/T&F#8rxhLn.Fs_S:Cel');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wph_';

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
