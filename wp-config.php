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
define( 'DB_NAME', 'practice01' );

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
define( 'AUTH_KEY',         '6+s{-COcqFWB~QX6C%b=^vjs*gsQw!UcuvE=w0 */&]/(TWLd{4kjo<Pmao&|S(%' );
define( 'SECURE_AUTH_KEY',  'klY5f<hTf!|MI;1$7-/g{HwkN-2:$U%FuTI3 ZRhkaVxf-$,<!e/6AU:pK8N:E89' );
define( 'LOGGED_IN_KEY',    'S8e-!UudLO8:vEVI9[0#w u7HXC0@kj^~hO`tE^+}Q)>?aCp3Y8D;^mpg[*%fy`Z' );
define( 'NONCE_KEY',        ' P-uO;POTZa5>$Mju}0:lbfUJagFy1WWxVbf;I9(?kDt5_*4Mm(!KbKv+yC-.&,D' );
define( 'AUTH_SALT',        '!6E(ag.I^r:z>TF4NDYAwM-Y>PYL^OO$3`$xN)0+H4C%E^KX1k^BbcFADLg0#nvP' );
define( 'SECURE_AUTH_SALT', 'LqujI1 }ALOlTld>IWXu=4l<W]1%ynUU;XgXx_k:OFvCqo<X&MCyW5DQ:l/bm+j@' );
define( 'LOGGED_IN_SALT',   'QF#7w`G`r6MkJy0~m7C3B_6?(ah4py=ywQLYZ!|%pV+7Uf/r2c_voNjz)bNQ*~mH' );
define( 'NONCE_SALT',       '[(!k(_ur_adTjnr#[5-x4nK5U[])S=vO `IhC{P!sv1;;<`NWauP{>*zma@uqU^!' );

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
