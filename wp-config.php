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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'K`O.::/*bY!ct@Z0@7vN1D.yslFR[/B=F]eI|R)$&6J.C|!-A0Z!IQ]Kw+QBY*qF' );
define( 'SECURE_AUTH_KEY',  'q74B!]*OTMmSf$F`_=w{r!RAcCkw9-%|iMLJS%,Ep>`r%e2c7@)d,,$k{+^L(3~l' );
define( 'LOGGED_IN_KEY',    'g1DPt6)%t}4 )$!* U t)Ev*?-k[~2$5lL^Gj8-)/:6Ef0kO L_kujazlRsk72cf' );
define( 'NONCE_KEY',        'N6na]E1Z`i]<NPtpSE%FP,#Btu9)Wi6)V($q81Vba@1F?Z]MqoqOsHBf%j3Aq8uT' );
define( 'AUTH_SALT',        '^i5:MPLDB,!3:_l2d2}~]>rY6+&spR8D$dMcmw^%aeG&rrX!gl4a{.xPT3+r`Wb>' );
define( 'SECURE_AUTH_SALT', '/k9zDOC5A4W*aLo-S9PfFm-bF}0J*ulLdSrH/(A3uXbo-vtDN3;OGK,`ZkC5a^>T' );
define( 'LOGGED_IN_SALT',   '8S(ofNt{TIxy3){-dJPue~f<E58Xvpz7P?CbckK>:oK$/Z3<ezY3/)cI|HD*rc#%' );
define( 'NONCE_SALT',       'IVLdX&9q*(lS8K)|9hRar6-tQT2T^w<)O%wjDA4oHznRbzQ&oze^h3sv|[6@#2#U' );

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
