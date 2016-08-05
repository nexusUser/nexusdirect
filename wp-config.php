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
define('DB_NAME', 'db156598_staging');

/** MySQL database username */
define('DB_USER', 'db156598_sam');

/** MySQL database password */
define('DB_PASSWORD', 'tire{}Fail12');

/** MySQL hostname */
define('DB_HOST', 'external-db.s156598.gridserver.com');

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
define('AUTH_KEY',         '}V?>8Go4Fsow|!2fP+m1LPs68!$}t_k[HfW7+0#.{c9ly*aH_{-j%c[9J^+XQNY7');
define('SECURE_AUTH_KEY',  '?4|O28&Y4+Hv/Sc4,#f!Kyn|@aS%Lzg*4aaU+-n9~>1X5?GkEExot33`+=x+@56`');
define('LOGGED_IN_KEY',    'YIAQQS[bUxIs|?BMUx+)GAA!}45}xbIE;=Eqw`5mf?gTWaQ`cir)X2g54+l&OQ-}');
define('NONCE_KEY',        'hrtDCM`~A10s4!%s/g;ZYs{5q+-0v>IO]`Ru?3<(N5(vOg^26gJ?J-G{kDOVJ(+I');
define('AUTH_SALT',        '4I#*&c<<O{@M+O 4J<%ZXa@X!@56|-~M Eesi,*|4{Ip@= s1+RTl_v<m;6zsM%$');
define('SECURE_AUTH_SALT', '>[H.C|@iB<+#jG!|;AgFJs$O#l]hvS)qN/WuP2AP2&6q]jq!bxq{o(J-o3+XhM9&');
define('LOGGED_IN_SALT',   'lR?8qOdOL3+cYAPow4iY6+X.^q8YwW:DX&p4 3k?1~1b;dn-dENTxi&/sUH_/z,j');
define('NONCE_SALT',       '*8o&j/k$YwCrn[tBhZPzL+;qJ~4mhRbSqLK<t}m1@6aeA/K$W]EN&X4IBm q2UXK');

/**#@-*/

// define( 'WP_SITEURL', 'http://www.staging.nexusdirectdev.com/' );
// define( 'WP_HOME', 'http://www.staging.nexusdirectdev.com/' );
define( 'WP_SITEURL', 'http://www.nexusdirectdev.com/NDstaging/' );
define( 'WP_HOME', 'http://www.nexusdirectdev.com/NDstaging/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ndwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
