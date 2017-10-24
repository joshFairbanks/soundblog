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
define('DB_NAME', 'jfairbanks_soundblognew');

/** MySQL database username */
define('DB_USER', 'jfairbanks');

/** MySQL database password */
define('DB_PASSWORD', 'u4u5ypymy');

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
define('AUTH_KEY',         '^G%(m,}p+#}w=X[}M1-h-`YDiRnR#kDTylZ-/-okyMu(`/6e@)!P}($9_p8gRDan');
define('SECURE_AUTH_KEY',  'CeCYx!hw(;i8Q2d!Y[QD6]Xqad$G!!ylyd2O%eV^=6t@>;1BdeZdtU@=Y+kvD]`:');
define('LOGGED_IN_KEY',    'Fx e|4/XJ@HS@iAuAi/? 0_~[Afn<D/aI7GG7bQB}+n_MdmUKZE!yZJko< |[JO}');
define('NONCE_KEY',        'Vtm~THO,c&^]X|bg|.z>*6e|2Gh+n;J^ujOLB|0f=]I5;ZUioxCm,y{V,~Fk/-N4');
define('AUTH_SALT',        '7M.z{Z#TrM[^6[$5OiJb&jTx<8b40>k?r.MG9.ORlmfjY+jUkDNJY~S4`8;,N1QT');
define('SECURE_AUTH_SALT', '2`9coLt}cqP,r17PtN2K  3]L<2z<uH1VExZXJ!.g(yO s>n_$yjCs2z$0*&36qU');
define('LOGGED_IN_SALT',   'fLZt]o:LHZ]Gi{$PKxPMz^g(=LBNv_>G{S6)x*{:-5;0xv)bgzh*<M![-)%g(umb');
define('NONCE_SALT',       '+bl;QC9,Kn(BIh/ l<e,;Tp!JyVqrLh^Bys1<0%+&,_=qXYm+4gl4]PpMc{%Hj%*');

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
