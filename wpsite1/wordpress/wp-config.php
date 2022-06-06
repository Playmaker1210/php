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
define( 'DB_NAME', 'wpsite' );

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
define( 'AUTH_KEY',         'r@}*0nu=!>121qHOs6YijRs^j_IBOSVP ZD=tt91:IdF_#-A*IQ;vyYQ;tjqYo{f' );
define( 'SECURE_AUTH_KEY',  'Dd/_1hi)#dPQ:M&H:.i &#cR9^W}C6X7z9n);qC~NHRGBpf^FwLPBO]ZR(-WP_sI' );
define( 'LOGGED_IN_KEY',    'SY#S/IENGK;,cv;VtSjgvLG|HTX@Oqfqs6/YUhF+_~+ K^)5E`~in*yHCzv qCFw' );
define( 'NONCE_KEY',        'DjEu,y7n` XZy7bPoC.*>.>DM4U7cL.3j>_pAv5@Gtlcn6NHFQfm lsCOcci4z|)' );
define( 'AUTH_SALT',        'Uc)ix,1f5BgD+7]H1Z |?GN:WUV{wvoQBkZLVtq*[e;mJNf~1tcE{RS09dhThtr0' );
define( 'SECURE_AUTH_SALT', '-kW*QAIyoAS$&rw5_8ip@A<C~j6cZNKu!wt{TDj4?@E7g^Bu+?2.v}zApB*}KXwq' );
define( 'LOGGED_IN_SALT',   'GaTg-L66nq?TY0J<}%7jL^P:3&2GqN19gr#)O07|eD%PpK2=*mnSF1`GFSl0n<3I' );
define( 'NONCE_SALT',       '?OPGj<7Xsjg5 &^CrT7OWGAIj2TXT2@J/dK@SjAB%[g}~NPH~?v4E8:VA~n$)rMU' );

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
