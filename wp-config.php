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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9 I^^[<>tJY2ji}Uy`&+?(@Mt<.48yPTJ~E>pw^5!~$0WzlfgjH,t$IMLlqop?9+' );
define( 'SECURE_AUTH_KEY',  '+/.H>c*sPbg-03@>#xhJk7CB]!)F-;=GzQ?o+|)awxR*5)=WshBnj]wr=HFj=g}%' );
define( 'LOGGED_IN_KEY',    '{T_k Elk(2uzPsu-,KCPRnB-S*95m]wGdQwg8=o~sUh!T.(hBV1Q~k}u#l9)05c:' );
define( 'NONCE_KEY',        '>!d#xIcIU%v|a0 FpDPh{TES K$~nGVII~@k_[G&PUy{ 5X$~t3)|gUd[P=*O9[X' );
define( 'AUTH_SALT',        'eN({Y-^qjT^7T{XSq^9x>2Yz3=#7o#gRO{;_[JC%$Y;G5xh_O(6oZwC5}hLXF+Vl' );
define( 'SECURE_AUTH_SALT', '+q!R/Hw !y@)0:9@&&n_]LOpy)bl~&{[?w48CXDj;W hfzG=aXt<vgUoOP5oAZF ' );
define( 'LOGGED_IN_SALT',   'V$mqorG*EWM_ 7I`9ZxOW$LH%8q%R*+9X.J[:Yl{5VT$PEe/S`VrO%U$dHx}K.a~' );
define( 'NONCE_SALT',       '`xc#,@<./:0:dC<4]>P@Zhaunuw{PRMmG(q,ao%;o$(ww?,xv-c=kQd ;qEP dZ&' );

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
