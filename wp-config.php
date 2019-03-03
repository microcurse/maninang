<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maninang' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jM$:LiXc+v;jKIQ&7#]h)H&B1)EV{_q~dqP:Ek@&{aHP7Qo0cm)xk6[mAb6|ScI<' );
define( 'SECURE_AUTH_KEY',  'HIadyPf$ei`1%A}EV#8X>URq0nwU=;)Qo]1h;TbW, ?EE:75[~1IuHGns(4A>VAA' );
define( 'LOGGED_IN_KEY',    'wgCpD;}WpQ9QUu]od}g!!3&4JBNr>cF%jObkcgv`uPV)]/LY;]ZorNFtF:))F^6O' );
define( 'NONCE_KEY',        'qqDIL$4GQQj{4&I*ZF;@rewfLIRhUI9a6?votDbWxOCD$6-nN=IAKLJIdAP4VQyK' );
define( 'AUTH_SALT',        '`y&W~A 30Eb2Y@L^yw1C>:?0r9-)2!6^yXOQ!^(}sxelYJiWWdLJ KD>$gj y)e3' );
define( 'SECURE_AUTH_SALT', '91,.k4R57X#2^(!<RO^jb1]j63g}H:(t1W2K$$qcPxPob#*N/VE<k6gg!I[|9sqh' );
define( 'LOGGED_IN_SALT',   'd;O/#Veh=,;_A.}g;@kx:bV@7QMX}fgE-A^{1D.swdCAnZu}?o.@j6*@Qsd @4w5' );
define( 'NONCE_SALT',       'd>B_lioK?*7@ R1,t?Ui&^+6iMQl-=@yWqzip))n&w9!=2s6A/^QS3ga8f2h~PW{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
