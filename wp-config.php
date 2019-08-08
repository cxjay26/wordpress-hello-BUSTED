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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'UBFi=%$Wuo<BL:UD>=W[oqB# /:-N /J%.`uxeP#{sdi2*uJ2Kj#Z+2AI&Ojp>D`' );
define( 'SECURE_AUTH_KEY',   'FWoxSw>/(70d00mcGpYD*$e,E=(&NU-vQ=]e3d/m<;+J5T~ER*}4k-E_sBeK<NTv' );
define( 'LOGGED_IN_KEY',     '],,DA%]8sT1Je:=n(Xqakx<tN(0M1pxsBp7tkX4H=TlVC=BI,bbfN|lW+1u?=wPs' );
define( 'NONCE_KEY',         'RHrd:%~px|htOgd^te8EjSRD)g7pSl7K=A;zg}X.8UY]f-YaKRk-+YHPcgBo?dX;' );
define( 'AUTH_SALT',         '.(BoDuNET_AjgXiFR1:?n:mqp$wiI4U<$O}ioxWblx<2ulg|^Cg_#A1A%Y1sAAfD' );
define( 'SECURE_AUTH_SALT',  'R6Ptitf/eS~Os^>W:5JtkWN)2<Q}T<7XC54h!Dl0tJX>+DL+1L3.?Vj/wn1:Z^KD' );
define( 'LOGGED_IN_SALT',    '(VV()>BzPMLOiV5rGE6<6aJd/:BAYs{iBul8nX#$[L`fKdOjr:-.c[K@qY !7AY=' );
define( 'NONCE_SALT',        'dOAVzU1E3a}/RfE27%RHb84:%7Gt+TC(.w#f1.wLL1zH3PuEACBYguQ(n[ux6KBT' );
define( 'WP_CACHE_KEY_SALT', 'zE:^}C-$u%hZ1H>QqF]nYnZ48Pe[ZZ#}l$CH,C]|g*CS,^HNH]C2_~%x?V?P,]oi' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define('JWT_AUTH_SECRET_KEY', 'PlO,)I)Q7ys)x,+K1p_/c8~s#LaTAWoYf!zU+&OB[`2gx9li){z+,pSop0ks1-I^');
define( 'DISALLOW_FILE_EDIT', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
