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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'songbook.local' );

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
define( 'AUTH_KEY',         'qB=;tTji3I,KjFGW7ayt)#,_7}%2Mlnjqq/?b-t6I3Uf/1` F98+-Ty ]^Z0KPEW' );
define( 'SECURE_AUTH_KEY',  '!7MOpmrU?u3VofUJlJu&pg!@yx>P}t(vJH)Bc;1Yv*3X!Jmepym6:jyVIYtRrv)|' );
define( 'LOGGED_IN_KEY',    '0QgujHN>}5so>= rh+{@dJLj@J6@USo*$+XG*$BB.w>S?I3RGRT/!y7c|3kPr)@G' );
define( 'NONCE_KEY',        '{]dH~~C#Ez}z*{TwVu<}:kas)U7dfwC!xm;ndmBTL!@SyXm eY;j]I+`$rK;4)PF' );
define( 'AUTH_SALT',        'X[rNb>N;io{oGQ.rb$+uR%N`Wb@J;#`Mx.CF=Ia-Y`v:[03SG1iedYlB]tLDslx^' );
define( 'SECURE_AUTH_SALT', 'K#CX3<N%y5tFJT<@s>+ca>3=d`ienM Le(Xc]Jh8h3^fXE.F&(jS63Tt^@(EL?,#' );
define( 'LOGGED_IN_SALT',   'nBjX_ne&u($q|NH)ggCfKWZb#Yp=U424k~Fu)A8,L+{JeH)l,,JLc&xUrmr%Wm3m' );
define( 'NONCE_SALT',       'c`aTk%mZ{&V0)L?GZtvU3YRtmD2OI*J>oJ F*PZ;G:oQv%-PIZDklQ2lLJ=!XF]t' );

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
