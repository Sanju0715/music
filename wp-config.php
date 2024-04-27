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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'music' );

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
define( 'AUTH_KEY',         '@]--D#Jt>J9dQ5;NXB),d87b;xp5Y17B:nl9V#r<w=x%y=+JrQax}rjf-h?3@q@G' );
define( 'SECURE_AUTH_KEY',  'BX7nbVnrsc.7#g}5VX9Q]q$#B@@/[Zy;Z]DVn]Wc.G[kvp)h!}CIxr5jmM&xHvTk' );
define( 'LOGGED_IN_KEY',    'Ywl98fKqZzk7<.&PGWU&1a*;;EWR/D8W>3E|u]P=o}Wz7#&s?OzWemdy ;>-3g`9' );
define( 'NONCE_KEY',        ':^+Q),:KE_.u?xY;Ux>ZiHGm|W[IwSRXw4)ueV-B/x#CFa5o>3- B4/s06=y@jkh' );
define( 'AUTH_SALT',        'u}_>]^/]h5au=MNGf3L.7D@_iwsU 7OdP@9arwuRB(GNJ6yH$o/C$kua7Im:j=tz' );
define( 'SECURE_AUTH_SALT', '#RV]Jn+xXJK%T6f0hHW~zJ?~rPqm!@l4<Ht7=)pPK$d,PM&;^|(<1 R3+Bm0:VoS' );
define( 'LOGGED_IN_SALT',   '!`MIr)CI@DMn!vuDas%X}*t n>-3BlO@X3>rNB P<5cCWVk<Lm~!~`6vOC-%=NM6' );
define( 'NONCE_SALT',       ')MX53-w}xj}Dc19w8dJ6]1Zg4NOZBmb=PF{Tg.%;|al=Cxv~ab5amMio8`K 1!AI' );

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
