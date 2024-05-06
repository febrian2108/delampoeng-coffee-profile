<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'db_delampoengcoffee' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'dhkbkyrekvdi8w5qzdlsy6y6dxnkw3fmaipktphjn4vyapisjzxbmiiif4kjoda1' );
define( 'SECURE_AUTH_KEY',  '1h1mdosk4mzjl7xwr5tpozv9yxbsxxb04tc2v4smj6iahw6qey6q5zckbaqcbev6' );
define( 'LOGGED_IN_KEY',    '1hakfojg8zmiiafuvc9v6kks5cawgeuzfusoez4kybjm3m27j3dwlbhfeceguqdd' );
define( 'NONCE_KEY',        'anfkmlxid88qn784jogob6ajmx3zkn9gljt2aycnd9nfs7vtr6zp4rqryfvmbhso' );
define( 'AUTH_SALT',        'dk9ld4bobotoswizzuufsrbzpub9zoh8dvy2drz4kvkuzqpnpcecbbcorimj6vih' );
define( 'SECURE_AUTH_SALT', 'j9spgferhsb4myqan3mtuprkc0shetvbmcknxr7azqtd0vgnj0lnwnhjxwd6npwm' );
define( 'LOGGED_IN_SALT',   'yeqlud8biovm9ynqybwcyllll7yofut8jdmc6wchyhikr4ufzvvnka3pvkv6lfvn' );
define( 'NONCE_SALT',       'si6o38i5crl5hwodmbtzomfynnjiqtswn6wmgolvlkvearsiyprjv8gmvdulgnlr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
