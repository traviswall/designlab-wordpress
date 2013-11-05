<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'designlab');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k6l`TxDU#.1#oye81#[Phy-$6-YV0o2|d/_Soj~F*f7UT34z;CnTBa+ak)04^|C&');
define('SECURE_AUTH_KEY',  '<qpXG~3UG!b/5ERUI+A4sVfFk$`POT`Cvqo% {ZQQs8E~&-[3M{b$wZ9~C@mJ@D!');
define('LOGGED_IN_KEY',    'Uk5BSJ*)3.jy9O)k5>pO9uIo:#s-ck%flkl63j)@|!)%Yca(H3Rb:gRiuOdjDtXT');
define('NONCE_KEY',        '4%/6H|<X{q;<^E2|@G]kkC+|K(*{P_Q+3%DTQxXf4ppu5?GqAY.||=x4~1hzl(yq');
define('AUTH_SALT',        '34:o+86BsGrZ:9W2%/n3:+XMW U|u3h(c{<0:Ucl#a<:a-JJs^/, WkN|l~-.9kb');
define('SECURE_AUTH_SALT', 'pe7nIk+Y[d>K[UMuH,4A+p7L1{O5|O_fV8i8H,:6 mf13]k#d@r@zykTbR%S#|WX');
define('LOGGED_IN_SALT',   '4,!@-YgfpVk+D-(`;J9&$%$I$Kv2TdDS `D(X3$4$*IK(|.>tyskO-7c=PF%^1r-');
define('NONCE_SALT',       'WvmXGH&SU2Jh0QvA1@7[hx[2fNAe_74P<#C4`IJ{}?yO~Flc@&dJcS@AajiLKN&x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
