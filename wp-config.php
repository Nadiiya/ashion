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

$cred_env = ($_SERVER['HTTP_HOST'] == 'ashion.loc') ? 'dev' : 'prod';

global $cred;

require_once 'credentials.php';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $cred[$cred_env]['db_name'] );

/** MySQL database username */
define( 'DB_USER', $cred[$cred_env]['db_user'] );

/** MySQL database password */
define( 'DB_PASSWORD', $cred[$cred_env]['db_password'] );

/** MySQL hostname */
define( 'DB_HOST', $cred[$cred_env]['db_host'] );

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
define( 'AUTH_KEY',         '3I9@5K] dZ@:L61QP_t)Y,>IG&gBT&OWge._O(1,&[/Ov=<,L[^:.Ae6lj|i,JMF' );
define( 'SECURE_AUTH_KEY',  '[ lwg:ZQ:NQ6|AbH8#+wC<}$Cd9_@- qz6uOU?gbLL<~i-id$6]Fz_-O6R*]Kr?s' );
define( 'LOGGED_IN_KEY',    'yB>(19~YIciI:@&zy A&V{[xDmp%?>S);CMlUuepiMfN?MO8hiP[ ${Hu/51x:%a' );
define( 'NONCE_KEY',        'sT*5J{26GyHEQY&?wKQ(gs1?@w:4NDMq5Qdyl:xxdG{3SJS4#u-F*b8C!oXcg$fz' );
define( 'AUTH_SALT',        'Z(|5tROKlBAoRwHG(Ieu)GP2:b9T V(U_E,/e=*^N Zc i?{2g`pvdFn-ML51e{f' );
define( 'SECURE_AUTH_SALT', '.G*t;M`c7g-fTh8!vL0B-@>eF{US?w6!r`6Q66G,<Os37G5oy(CLv(`KODJQtt6!' );
define( 'LOGGED_IN_SALT',   'b: )zi9f0|e!Ja>e1A%fQSt]4@t|v&:{Ppj$|:%}{,X9oV1JLz+t}8z 7pAeO,6 ' );
define( 'NONCE_SALT',       'Zge!dr!u*une(XNvtMy{M37/]]Z,])~fOY--S@y;}6o9EM@p(E%I@Tdiy)i{?mD[' );

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
