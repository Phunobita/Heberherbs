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
define('DB_NAME', 'heber');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'cg|($N+FMx:Er;yU,>]{edRlkVnGUro6qN-e)ybb*0P2uYm^t+,6+NqEyxdi55gf');
define('SECURE_AUTH_KEY',  'D[TX5UU!L~wILQxf7W$#ItP9t=X2@@% 6{Qrn[~[3vUi+GG59vc^c&R~(0ZI68K8');
define('LOGGED_IN_KEY',    'u,W>oOJz.bPWli)B)m)9qoYZdK2r+mUTx(9G[9G_C`&JVc>>vh#x&BcT;NC49)EV');
define('NONCE_KEY',        '=0-HjT${Ph~Khfto&qmR*GH;:-do;HSTORfZz*L-XzyspxU0gQ|<(5D|vKt&W=QQ');
define('AUTH_SALT',        '+.3C$>LGd}zG21pviJZ-MAxDCECTN*O&qx{&o[v~;)S(Hh]Wevkh6GX9gH%Vh@=d');
define('SECURE_AUTH_SALT', 'w?YR+`i$ Eeu @?zYXRiUFXtKOH7. bpm2$=$r>;t_N*d.igC5(`s.Gz/S=j){{?');
define('LOGGED_IN_SALT',   '(o@dhCYdngO`|~Y_s<33l%X@/HQIN4}=jG|NH5x!x5KVUZ:UU1Gpx^rzvp!=lN4C');
define('NONCE_SALT',       '}qC)kGT,am]OFm_8D2Rsn%m|8==s!=qg_S,gpr;avf`X_;y |-Y@n_j]b80LWfBh');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
