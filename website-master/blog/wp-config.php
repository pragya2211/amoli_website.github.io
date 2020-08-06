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
define( 'DB_NAME', 'amolitru_wp675' );

/** MySQL database username */
define( 'DB_USER', 'amolitru_wp675' );

/** MySQL database password */
define( 'DB_PASSWORD', ')95di-pS36' );

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
define( 'AUTH_KEY',         'hsnpnzp4wglbf11zpo3iljs0sthwmuwkq3wvigbc9vppcbu1a4pvknxfz77zk7ec' );
define( 'SECURE_AUTH_KEY',  'ivjjqdx5klnp1jdzhrfxfbs3kxm38sgcwz9j3d1rte9qmjemjtotggzorpg8y0dj' );
define( 'LOGGED_IN_KEY',    'oj6buwtql7hn2grzpapvrxumdugrmf35wkz7qtb75mxpx0zibzt4wodawccw5lpd' );
define( 'NONCE_KEY',        'jxjb4w4nb0o9mbnbxdvj75j5iam3byz6yzepbvcew0nvwh6sthergd2kyyr4ytfq' );
define( 'AUTH_SALT',        'gioqzzpkn1pjqpdgzipax4bplrv7bnczunchjemq9xyzb7dnnngivdj6s0yj4wli' );
define( 'SECURE_AUTH_SALT', 'fwkxs98whp4d0oxfgg0pnzs56kq8e7bvamcrfjxjmolrvohunteaadza1pvhqakb' );
define( 'LOGGED_IN_SALT',   'mnsynh51rn1m4eggowwqqoctwxilp3yya2ptw2b8fmgphszeopsrierjqzdlrhfe' );
define( 'NONCE_SALT',       'wtpoa28bsdwgyfbtetftqscqz0lasf1pqtobpfefk1aaibwey8qf09rxlverblh8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqi_';

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
