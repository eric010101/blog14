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
define('DB_NAME', 'gogocode_blog14');

/** MySQL database username */
define('DB_USER', 'gogocode_blog14');

/** MySQL database password */
define('DB_PASSWORD', '72I8VpS[)8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'frztlzy1xqvk5yy5ygzovonnsxz4gxecvefi8jo0asxei9aldsgrg3payihpzws5');
define('SECURE_AUTH_KEY',  'gpwbbcxox1lirtc0ipklezsnl5livgtjyesaaxg62sdglg5bf0bmdnhhyjt2ozed');
define('LOGGED_IN_KEY',    'm4foaqbnvgfbjkyz55baiplbcwfmlksgqfagclg6fkluvgp0grl5fmtvqeaatofc');
define('NONCE_KEY',        'ep6yjkdnw06dvjfb1vpx8v18idfv7djxulgnkevpabgqasweiftwcxgnvtuufttv');
define('AUTH_SALT',        'wa95zbxtz0s2qs3pu4alekgx9ebixeiurdlv8cuyonjzzxltdadyq7tval6ljqf1');
define('SECURE_AUTH_SALT', 'kyx1mbbrcrvu3oq7nbakun2lsqkpzyatcttaejccg19jkkigzhesbpexsqoutvty');
define('LOGGED_IN_SALT',   'o6gmf9qiaqcvntlzleualox0m39r3wnzuwr6pg4k99adx4gd89g8rnlmjuqrvvcs');
define('NONCE_SALT',       'uifxhwp8jhcptl5s6jsmqhgmb3y3r6drgaijvflsw3muqipr3dwlhteuemm1ybwy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
