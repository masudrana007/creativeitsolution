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
define( 'DB_NAME', 'hardtry' );

/** MySQL database username */
define( 'DB_USER', 'masudhard' );

/** MySQL database password */
define( 'DB_PASSWORD', 'masud@2020hard#' );

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
define( 'AUTH_KEY',         'n/XP?,2U3$({X>0og[9ylM=,8i8K]@lS Y@7K8Hh0dqdZ<V#s@l* :INl$KI5#ZW' );
define( 'SECURE_AUTH_KEY',  'Pi]Iv_5cp%3VVh{qm!O5+yI|7;o870T&,eoxA-jnm/<wy}>MT_xL?l;>vq|+R1gu' );
define( 'LOGGED_IN_KEY',    'Z]o-_@YaA?A%oM#)vRp1BE]/^~)C]h7jtTmjpCD:$2b~.q(lVg`eM1?{SPN/G/hD' );
define( 'NONCE_KEY',        'KXkjC5Oy1sI%-xb0&S0fs@*$c _H@kd4d8ImqOF4x>j_z2a0, <.l~<aa!WIX&$a' );
define( 'AUTH_SALT',        'J09[^3fvjQy(x@tno[_Q<|&IH;a~EvxPR(H!L[ W.hb@:ZG5uz#Uz;;(;lW.Zt5W' );
define( 'SECURE_AUTH_SALT', '~k$amh*3.o]W+u+4)G;.|/}PFJZV%F2MSbu5BJa>Ht$F=l(ylGs<_(-H0iKC+-2Y' );
define( 'LOGGED_IN_SALT',   'Y=n-6!AWX|d&5xX]G-A/u2tNzY5+D[u*py]Wzkb(GPs-j(bXKd!-dJ%xS9D=W1F ' );
define( 'NONCE_SALT',       'mMtFn8upxn]dHGY!Dg+3I;ME_x}F8<>&s_zvD+:$ht)bT_Lch~|$KTK80)}sy?[9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hwp_';

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
