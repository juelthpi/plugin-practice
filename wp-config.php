<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'practice-plugin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */


/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q%6K4<MRh]!6Dmmc@Mg3-vv{6>d2&FL05EQE8?fV,_xfr+?g}P|W}!Hm`i:~enBU' );
define( 'SECURE_AUTH_KEY',  '(H]<5{ROO!vh;>A$to@|X9;biTW/s2ovJ#i_(_~L<UeB_ H#2q&6 uD3RLw)9X 1' );
define( 'LOGGED_IN_KEY',    '<U@Te}a@!aCbUkM`K_pO0e}sb9;w@IfG4Sbi?;hIVVHIb-_<u0EmUH`9_61?wfJI' );
define( 'NONCE_KEY',        'Yh.?gGF@QXShV5LBOxnCfb:e:q(-e[nSiZR7dN<<4]E2Juj!z{l}c56AOuLF4!Y<' );
define( 'AUTH_SALT',        '/^x04}#!WIP?`,DZ3QLx+9)fkOjj.A%KU,DK^11f(b=-Oew5#RbFmnO`[M93n,3&' );
define( 'SECURE_AUTH_SALT', 'vE+>0FSn<+{5gTCU+dTU8s#58#W`#8QjB%&4aN|3?&6qOJc^AvAc,JuI+GzbGQ&.' );
define( 'LOGGED_IN_SALT',   'K%fA/(o5qocEVPCCFKH/FtxcFtJAzzj/e|Y`PSnb#*)TL`F1?k} _[FF01k*vR6?' );
define( 'NONCE_SALT',       'VuQ(lD0uZ@B9@TfQqk4v74<}N~(I+Q`*H$(G-Y^LgEES9e(=NrHFDt:_bVo3Z^H-' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'DB_COLLATE', '' );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );
define( 'WP_CACHE', false );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '2048M');
set_time_limit(120);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
