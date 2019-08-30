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
define( 'DB_NAME', 'ltownDB9pyhb' );

/** MySQL database username */
define( 'DB_USER', 'ltownDB9pyhb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zf7D4cULRI' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6+TD;]+iSP9#xieO9#xteO9]-hSO9#wtZKG1~plSC9[whdO51!oZKG1@oZVG:@okV' );
define( 'SECURE_AUTH_KEY',  '2eA*eH#lL;tS1-aD#lO:pS1wV8~dG[oN:wV4zZC|kN}vU4zcF>nM}vU7$fE>nQyb' );
define( 'LOGGED_IN_KEY',    '{qbPE6{*xmeTLA2<*tmaPH6;.xpeWLD2]*tlaSH_+phWOD1#xeOD:~pdOD:_shSC1' );
define( 'NONCE_KEY',        'gJ}^vjcQJ7>$vjYQF7,$nfUMB3>^unbQI7<$ujbQI7<$ujbPI6<$qiXPE6{.' );
define( 'AUTH_SALT',        'iE;+mWL6#+mWH6#+lWLiTE2.ueTE2.uiTE2.tiTD2.tiSD2_tiSD;~teSD1_thSD1' );
define( 'SECURE_AUTH_SALT', '@8Rgw|4GVgs!:CNdo~[8OZo-[5GVhw_1DOdt~:9Oap~]9Kalx#2HSet*;9Pap+]6L' );
define( 'LOGGED_IN_SALT',   'Xy{AQfq^AMbny,BMbn${7Mbn$>7MYnz,3JUnz>7JUkv,4FRgr!}BRcs@}8NZoz[' );
define( 'NONCE_SALT',       ':Ohw#5GWhx#1HShx_1HSit_2DSet*;DPaq+]6LXmx<2HTiu.;EPfq*6MXmy<3ITf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
