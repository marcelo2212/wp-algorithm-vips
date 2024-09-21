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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i9773430_ohn71' );

/** Database username */
define( 'DB_USER', 'i9773430_ohn71' );

/** Database password */
define( 'DB_PASSWORD', 'E.eK8IDiemMSNmg9m6g08' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'udrb?v84yZt0wFe,VBXp3KS0[mv&fjx`{!EXnR/o-e}VUH$] _-A!;Op_pT9Ar-o' );
define( 'SECURE_AUTH_KEY',   '}6[$<#K1)O.[7Y]zLAa5@gII|LbEZ=gt3uH=zpX~l+Ts+f+]sZ58:RX9uQe}O!eK' );
define( 'LOGGED_IN_KEY',     'Hgk(p^C$#@]NeS8~%*}Y{,0H_pWR.LGKhT#&GOo4Mx&>s^OBVKRKH9?1K_qzQvI+' );
define( 'NONCE_KEY',         'qT..F03_+Em;[ZzD>$L#s99JL7yj,}Vt|(WQ-FWBqN8(P<=I(<}_NsF}t y9mKv3' );
define( 'AUTH_SALT',         'm~tj`1iInzjEur(psCo_<S/O`qTwS[bg2pG3-v8nzs@R`*6to?2d0(|w2:*f]8%U' );
define( 'SECURE_AUTH_SALT',  'HthW]$kNN1u3^?uv_pM=6p@d;kB]9eG7jO2CKw jEEiA?@ZA;ZX_,8f5g<6/GH.a' );
define( 'LOGGED_IN_SALT',    'C#f8hC=U]yS*-jzwa+r~I/Kz}ke=0@jhPTgb+<$KE>U2LxPFzC]K7L+Y}qbv|`tg' );
define( 'NONCE_SALT',        'j;=]v(j1D/^w[@z}f6+]@rTH<kGji=vI{^O4uj*vr/kN|>OHY$?e_ZES/H=25Ckb' );
define( 'WP_CACHE_KEY_SALT', '59IR(Uj@mq(@r=%@n*b:NPHYcs3th-68P^p6-x6g`zy&N6kzLtF;pDa~pRK!;&A}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
