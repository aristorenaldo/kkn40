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
define( 'DB_NAME', 'id17551073_wp_b51fd3094d3bcfcccbe6f36e0ab62490' );

/** MySQL database username */
define( 'DB_USER', 'id17551073_wp_b51fd3094d3bcfcccbe6f36e0ab62490' );

/** MySQL database password */
define( 'DB_PASSWORD', '42b18d081d79f6dae86d459daea72ec673c8c021' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '-f$M%=3OM#6dIt}B{Tsdp{q}X%ks8SLYE&c-XwQbFGz$_?h~MO?+o67G#_T,xXwy' );
define( 'SECURE_AUTH_KEY',   '8=`-vRJ*lu[tzAK?BuP13N4R.B0{;{<RqC_;P=-IrejA*b}$D.rc0YYSm#;2iPZ|' );
define( 'LOGGED_IN_KEY',     ': `&X{ hrMCa<6)rQ<D(tm:/vFhK6-d~/[B]Ihe=*Z*cD+&b$[EaVeeHcTWpvT%>' );
define( 'NONCE_KEY',         'y`lWX]L>F{h*hTU}1}B`5=QRs44nW8FeUw@[m_LX-?cgN=.g4*jte^P_!I1s$cZc' );
define( 'AUTH_SALT',         'gy*ahLd6gC_Cl}}ST?LWw$cavPGnjZ4|+c=bZ~}y!M9v }[vq[|+n^jO8@9zohWQ' );
define( 'SECURE_AUTH_SALT',  '(D?7D#*%z:g5^^RPnU4/j5ZFD?/PzXevejp({}NC7+/C],` c_u !xz>w=9(vq3d' );
define( 'LOGGED_IN_SALT',    'nBZ2sL~][Lg]i{3F8(0;J`GP|7GK:z]GiW Te[-;9K]9Ix;zOuW9?0Q^,4NmPjJn' );
define( 'NONCE_SALT',        'pfgUj+VR};~x~ &lC:r4fi)=[jMW<_(BRANy9dA& oSn3:&8:-3{+}`Oq9o%eR[P' );
define( 'WP_CACHE_KEY_SALT', '-cQuA1F7~5=/:2TT]J`_3*lm{-3.eBbSzJ9hk7wiQV=8ESkP})&[.BA<5GF:Edop' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
