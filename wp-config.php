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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zeegram_blog' );

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
define( 'AUTH_KEY',         'Xg6V_*lGE5!B VP9@^Yj]-*f#7WZ6?p29`7Pf^K]N0.E{RQn^7fg=Qe-8T-,Fz2A' );
define( 'SECURE_AUTH_KEY',  'Ft2TJu~9l>j,yB;8Cpzl }(BxkWl<>W5F>%sMfTB1@&Fdl -8$L@e4&M=dQCuCPm' );
define( 'LOGGED_IN_KEY',    'zHv}.9}ypF-PKGT qXK/f,SvS9!%#x3Z{xN[m}hj6|Inyg4K(@(-kJ$=H<@Dg{&a' );
define( 'NONCE_KEY',        '7j>^-@]|38cJgBdB{xsQu~sc!)=>y~2n)k[cY~!JS33O*`8/[rZ}f/,ToL<!sZ6B' );
define( 'AUTH_SALT',        'z|)Id_]=Rwkyb[Fmy1exs9fO5EoCY(;XM/C.Qwe_5S5iN~|THcKto9v-xdmnJL>D' );
define( 'SECURE_AUTH_SALT', '4+;Y8[xRW,vc#X=joSZ<n0;$r#y{j|mhG9v{]<gO*uqd2jwN1Z;}/)P=+$|T!W}^' );
define( 'LOGGED_IN_SALT',   '0,u38]z<RSRuq;kpsFZclO0~PIcvT;UI5+%*_?bV@Cq2p]Y^~R|@CEg5jG.tJC/2' );
define( 'NONCE_SALT',       '&pordHO$O/Y&4<:}b?(/,n1 e7[/io-y]{gmc@YjiAbPl{{B<%Iv-:?KJiW3^0-|' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
