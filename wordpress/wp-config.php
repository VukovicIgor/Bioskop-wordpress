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
define( 'DB_NAME', 'Projekat' );

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
define( 'AUTH_KEY',         '1^F~n:0lGt[r{>8=z!}@Sv-wYj#A8U*xNMSe,aw_~7ic{1+6Rc,TD*fa%?Pg9Hy;' );
define( 'SECURE_AUTH_KEY',  'S7;G]I~ma@uG&?&Wm0Ftmc}PoRYj$K&V[SaDP_gdWKFp`Qw-{$jKG4%rqwCvt<an' );
define( 'LOGGED_IN_KEY',    'T1@k)!rrq2Z_s:cY;~hQ{l,.@W`P.P2?&yko}vee&)4sYjhT5YT6R_vH{=gRwO B' );
define( 'NONCE_KEY',        'iAu<*Z}kB_lY8XugI.^r ?XZLW![[-cg9^`M<Ncc~X*Lp).zIyqa0w0*H3&u6HoJ' );
define( 'AUTH_SALT',        '](o2g^lWOX(TAK(l[F}rwXS+Iu1@@7myWKak.S+KoZrW>1uGjJu5L_lirb#~#ZKu' );
define( 'SECURE_AUTH_SALT', 'l]I/wGKaF7+6e^Bpm? e?_iR1.l0Gz>.pi$mP=zdM}@i;z~WnL7jYS0j#fA5m.V^' );
define( 'LOGGED_IN_SALT',   'lLD3hjm6d1E&9k.YDd.w@9!&=QP~9kT9|Rbc#,ygJtE$]/X7g)CoOOliCf;(sA!V' );
define( 'NONCE_SALT',       'OS#;4h)S=Khb$]6R[599Wr9h:IwUIMq[1La-;;,qxYb+l?6$w4&M*mJp4 I#HcSW' );

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
