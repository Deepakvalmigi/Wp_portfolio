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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'N_}Xq?2M2XB.Hys!KS~{WYu %!XD+*R~$k>_( l[zaE}[TAwU]q2N]d4_3#pcO,X' );
define( 'SECURE_AUTH_KEY',   'O&AFfq ==:^cNoz4lY5>~=uNkwSR<6`aBkof;tUT4d]UyRFB8fl!x3n_a^EBcPj1' );
define( 'LOGGED_IN_KEY',     'GA@kQ2uOeXJ`K,C[zE0<bgiD`f7<_>YiHe}~*hQ?)4|{TBdd,4gD[Tp]7GOeC^)Y' );
define( 'NONCE_KEY',         '>v?W()a=-8e3?s[$miFgF}^,.]/<4c08KkiTcf_:RWo,d$8#ML W=Y+.xPv5gr[+' );
define( 'AUTH_SALT',         'F_Oa0:vVz1HHSe>S#mVUVJi*dThv}s]r4PIrP@^j=[eRtWW=yCfj&MknvwKA36M,' );
define( 'SECURE_AUTH_SALT',  'jFN{_k9huYH8qlSSdNd%WB}cvo#1wlZV+|];p){lz7~+A&+7O)`R:z}T -kOy+EQ' );
define( 'LOGGED_IN_SALT',    'e]VC5&,G#Q~1~.<&=|=$|jS[{ZEgqe A<PlTdmJAsxDP,~fsu<(i3h:S_j5PS2w-' );
define( 'NONCE_SALT',        'D[&Xi:X!KxW5ByPYtU.7E6X}mOR&r.augpz]mUbH{`.5ATb+,@ZO~E<?fl?o|U+m' );
define( 'WP_CACHE_KEY_SALT', 'J^:[p#@XqMfE|Aj #yECN`2^f@f##WBn1>MO5i,yTic-nInY)Fm86|Gr&L!lfFIv' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define( 'SURECART_ENCRYPTION_KEY', 'GA@kQ2uOeXJ`K,C[zE0<bgiD`f7<_>YiHe}~*hQ?)4|{TBdd,4gD[Tp]7GOeC^)Y' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
