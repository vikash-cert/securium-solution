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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '<#C8n7+|~b)-^V2W,tSNpth9|>D1c}7PBlM1nCiI|x1dSo47LnK}E79y4@$J CdO' );
define( 'SECURE_AUTH_KEY',  'OewI5Z&k`ome&o1~o0m4QW5V9N_=^q56P@E:%B,xNv%y%l>{2 pu<FdO#hM&{=TV' );
define( 'LOGGED_IN_KEY',    '8U}).l?pd<u_QU&XVzNcMae m(!CNM;D*Q}a3wrypjVa&}[VLrQ:KB*iraL`%JQ>' );
define( 'NONCE_KEY',        'z{(dvZs 9;^dk;<?pf+7vz`WADpWcqaX0l0YdaH0PHT/caST/Cl`KCLgQ8 5.&6k' );
define( 'AUTH_SALT',        ' }g0dbw`I?m4z3#um7)Hz2dJ2MjC@czntT#SCsk*|:!t!BeB5@Tt31G6#Nv*1]m]' );
define( 'SECURE_AUTH_SALT', '>V4K1/TTZ/3W|t?:ZOqT<t>G[6n?Ds.mP4PI`;EK,>.t_fr~(M#;_z1uP_d$t7n]' );
define( 'LOGGED_IN_SALT',   'bjj,:wa|!k~0Nl0MPWVlZeU=/gIonE-S$EN.(d-FZkr,n9j<Ts~R!UeDEgbeT.-D' );
define( 'NONCE_SALT',       '|CiN@^/@<Qupx>E=g<RyW;D2n4@v4A1JFeQk)k3S(yGOuy4 cOc~;ya*iN1H]Pt6' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
