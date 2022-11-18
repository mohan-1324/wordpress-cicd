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
define( 'DB_NAME', 'sample-wp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123' );

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
define( 'AUTH_KEY',         'uK:y/<Lx-&soGlWGf<VJ,aK1|6AEITJ*C9x_9:B4cq}1$DXZU)@YZJylWY+88>v8' );
define( 'SECURE_AUTH_KEY',  '6Sf.-fxiXBB82+U~%8[)LrQ>nK727JYO4NJ !/ w;to`3y?!yS7Y)+no]d2*oSNQ' );
define( 'LOGGED_IN_KEY',    '&tZ/Ss3^jzgfyhz~K?IM_V_YMmc1NcyE^4]7{^-s1P,|;uA8|n}LsM%S}kl,(n22' );
define( 'NONCE_KEY',        ',K:*nH1|X $ZDQ{MoycwMIVwPs/ 13tY0y4$Qq`Z3kAfD&eL4tWPVD&(gp9diF($' );
define( 'AUTH_SALT',        'od,e%2h}/qwZb9JUL`3TO0np5&6APs7sJ.Os[MAMv}BLzqIa>Py6+;</UXxpy1x;' );
define( 'SECURE_AUTH_SALT', 'tCBnn)&cEHYDgKE&:>Q[B8.v)).`Oz+F1ac$uat):<ilL7mca~m+TET1D4O hPz@' );
define( 'LOGGED_IN_SALT',   'q $X=$?rYkX&A^ZfR$=g>N3MeH?k9(;`qBS0`QM{gx>MM<?(CIr6p~8.]9~*HwR;' );
define( 'NONCE_SALT',       'om-69*w|$y&En]0vsM]/eOQ,&1@1w6R*o{>eH53!nK1@]*31@BZ*?Jr%u7qhqmxY' );

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

