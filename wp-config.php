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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbserenitea' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '-t.w|0WQ}.u@&Mo|mF#?]T2h):Iua5X]iY+1XAGP1}_/dC50?|wO[`QDGl=P2}LL' );
define( 'SECURE_AUTH_KEY',  '*W>n~MsmU,tjvTg)k6.N$498EOfY(/Ow+#4dz3hf<<-vK6-.F)[JIj<xal)]2LVt' );
define( 'LOGGED_IN_KEY',    'd4TNIDy}VLm|Q,s1x;-toD9P?RT{Q JV^nRi$ar+{Djqj^UG|Ox_`8D$&L*nryI<' );
define( 'NONCE_KEY',        '*9!?FGW(zdjw.1C=6/jVx8Q?w-03f802)wt@q[dg:_c!vorAs@N@:Ncw_[664Eu>' );
define( 'AUTH_SALT',        '=9!jOyl7=T*Gi$}kmZ L4 Y3&RvwETFy[8MAmzBw9a:%BXyRLMjqT;;4tDV+Isx[' );
define( 'SECURE_AUTH_SALT', '7UF;5[kgx3::v|n1:$[e<B~~ |;~b=In$^7J|MiEQpr2}|EC :/krb<r6RV[t4h.' );
define( 'LOGGED_IN_SALT',   'U)Z2Bw&}[oAlSF6,|fRV$SSe&=px,Z/Ao=XFi5vn)*gHRA@XZ~fucy6Y:gVEkb`[' );
define( 'NONCE_SALT',       'X3T_Hjk^-Fvt7zy [0T~$UFIC?`(LDq7z.&L5Z$C& /FtOO,Of/EE6=5n@)K7B%[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
