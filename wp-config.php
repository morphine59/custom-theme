<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

/** Database settings */
define( 'DB_NAME', 'portfolio_db' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/** Authentication keys and salts */
define( 'AUTH_KEY',         'A svGR0~, hVf>Io%)<N:rhb<^X]}LBA@`H*Rc,<ITBpX:>Jn[pOjz3Xd=jtt!&<' );
define( 'SECURE_AUTH_KEY',  '9:aBTVq397RgNK}#h&{mEB&53a8&{yF8lI=ce5dcRa>3X2aCix8[Cz}7q&gHEF$k' );
define( 'LOGGED_IN_KEY',    '.&UR`BOo 8_g>w`w,qr+!q9l9W0(qX]SUJGN2/MrpT%@v7lUlN}c+`p^FjH7K%SQ' );
define( 'NONCE_KEY',        '3q8oGf;hf@7y(58;BnS7}&eAZ?}uueu8|&dxngQ`V8WY3/VSaYujq3XFhC% {4p+' );
define( 'AUTH_SALT',        '4Ym#W wyi+Sq:/jBL=yK:I13]css2,__8.y]q<cnI!NT#XegE DGZ{V:<<ZP]#((' );
define( 'SECURE_AUTH_SALT', '@9XFGz*m6|kLUn7f*O8@g3mmQ-Gq=92@I**`vm;ozmGYw25&$+_[]!:j|yXywO[&' );
define( 'LOGGED_IN_SALT',   'WgBxaqH]aTSIN1r^1_hs!e,Om Jrt{83.09R6gdS{oK8Zhqn&wr9Zp2)95@BSptn' );
define( 'NONCE_SALT',       'mY+Uk#j[+<F+a=kBmyq;[oii[BXi?I@r.OszGyjAfBZ!g1,.j4`q+;R(MzW$Wp=G' );

/** Table prefix */
$table_prefix = 'wp_';

/** Debugging (development mode) */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files */
require_once ABSPATH . 'wp-settings.php';
