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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define( 'DB_NAME', 'wordpress_db' );
define( 'DB_NAME', 'wordpressproject1' );


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
define( 'AUTH_KEY',         ';CFi##Ne41;oGCRri{GJr2P!<rh=U0~eW3@XF2dr$f&88A1WI|_g,:g 9xjNSC5,' );
define( 'SECURE_AUTH_KEY',  'p3DaMHLh4EA36HVNs^#+#BQmxoS5IVee#b)P%aVJRA/cD$5v#[:%-13 ek<OM7oT' );
define( 'LOGGED_IN_KEY',    '[~m ,ciZ&vAw>PTM/jXA5_.E,5m$-b-Z4T>pU7Ky%6z`6{AWB/{~Th(3~8Mh$QNq' );
define( 'NONCE_KEY',        'Tw#O60_IFCV9_j7>^:$~y~PrA9S>Po<h|oX%(*GrqYMg,=v&QPe}Q6?.IzP/(.)A' );
define( 'AUTH_SALT',        '.Z0OP0:!gTUx|)~2:G=+|a8<eCSH8piEIKH!W%p@?,2~}DOj(b<Na5j{S*8aqRL7' );
define( 'SECURE_AUTH_SALT', '7Eiit0xOA^|z#-4V28]<xqu5w)Q^pafSy^,.g] inGQ{R5|<Y}9@<ds%F7x>Vti^' );
define( 'LOGGED_IN_SALT',   '=Kb~4B`.w2Z,#lXvO#]gwpXin?!-W)^gyAGdRoMxxv0fs#&0/0)a8c6=QX>s.[&_' );
define( 'NONCE_SALT',       '5uGBqo<RieX-u@smF{e#i|m:_[b|/qGR~`jx]WqZ3JhakN,yr`~.z2g&FZZ*S/q$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
