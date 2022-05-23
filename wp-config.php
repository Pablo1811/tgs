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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tgs' );

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
define( 'AUTH_KEY',         ',Wib~N!0w<}LB~Jbae|]$(^}6r`s~nC^!:I`d-~9M`h.i?].]V-s5 |Ddt};H_^x' );
define( 'SECURE_AUTH_KEY',  '/@bmf@./1^PZ:XmM0[`6P:$,/No%Q;J0V@+KSfLEkTcko*hhekg+*$R.~s_-P2Zk' );
define( 'LOGGED_IN_KEY',    'Sqz(-[;C#+oh+]48GvA9J>WzWIyFe2-4Xx8N 1^/:J-)6UIKTT7IWAFCR>/sxska' );
define( 'NONCE_KEY',        'wYw3I(](jlg= _wy@pVzbH{*&]`6@TY1][7<d{[YtF2&vn}s,vO@+LZB15qCtKqu' );
define( 'AUTH_SALT',        '@T*L~ut~(s8nHh]q_)hW/&$(K/R2LsIvN{J%3Fjn>%$)]:ZZ8#T8^8]tyIZI?TTh' );
define( 'SECURE_AUTH_SALT', '#CFs^]!-D.qZ~-`*_MfnJ+P`u3s`N_/J]nZC[Ri;B.]10aVh0+->)G~.)TjKQ$5x' );
define( 'LOGGED_IN_SALT',   'i,C0e  gZqA20+6HO96$H*}ih#F8*R,/07b?!c)8<.Yio3ZLBbm4+v$cy|-FdGBF' );
define( 'NONCE_SALT',       'T1Utz(n+Z7:I9bzH.#C*d:$R#0#MTs:pEV|HG`tcJitEGPUwmVG>b>{`2>bxDtll' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tgs_';

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
