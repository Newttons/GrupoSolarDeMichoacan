<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'bd_grupo_solar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'd%Nerx@x-T18X.iFV}K;!ln%{>p3={@(tcTv]{g=`8BU6TEoRE@{<H9uj,tMhrx1' );
define( 'SECURE_AUTH_KEY',  '<Q[}}!2?#8ONO>D&uODsNReN&,7o*!1pq[T?D0b6~0LPI<Q=V$tvx?R:@[Hyla*{' );
define( 'LOGGED_IN_KEY',    'YC^iW[3Z5lw.d%|fKAN)QbAzSc&x0U|FG-Q&/Gluw$BqUhU95Y.N79;k.jKo/VW>' );
define( 'NONCE_KEY',        'p1E`_N@MUz5cVuc~45FL`no`&vM~X>J}TBH!T5<u;}g]@%exs9&{X$!w}4d>O+7X' );
define( 'AUTH_SALT',        '4t3$RpEf$1%uIKH,tWx?c-_y?&(JQ1Qm+~*fJKG9ONc{[&#D&[[.wV./uypJlF +' );
define( 'SECURE_AUTH_SALT', 'lY8DMswa8@)U1Wn+LBT~.iqr+()Ya@>3|aq )gQ:Q&{T`0:Qn%VlY@/]+;n)`za1' );
define( 'LOGGED_IN_SALT',   ';jdU=m:hf?I|(v-rY7~YSMi4`r?j*/5B=f+ H|61%hSCVx @BTtxFcA9>n@+<MEe' );
define( 'NONCE_SALT',       'yiR{$V}D<1cw%APc:=HVxRL2*!g`tGivW$(OdZnlIeunBSK<Iz1Vm4#WuG4I!h(1' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
