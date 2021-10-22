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
define('DB_NAME', 'ljholida_wp597');

/** MySQL database username */
define('DB_USER', 'ljholida_wp597');

/** MySQL database password */
define('DB_PASSWORD', 'MNp270.@Ss');

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
define('AUTH_KEY',         'ow5nldgef77gskv1uerjomqbtp58zzs6t9jkvdxaycgy9akgw1zjx6k4spgoowuh');
define('SECURE_AUTH_KEY',  '0nmxrqy4hzn0k2sq8lfq01pn5nectrxfwyfzzxrgyhnbzcugtqaya0ij6mcu8llg');
define('LOGGED_IN_KEY',    'bvimciuywcr05uj37s3gb3mbdxjyatqjqotywoesk8djktn0sf6vduqnyyoqyoz5');
define('NONCE_KEY',        'otqijsfn1kvqfv8ilrovbby7seoyrplasxbz2msr4p74afri6dvbgt2l6rp3arzr');
define('AUTH_SALT',        'kavz4kgwdoftsjrklozl74yighgsduahfvjtrof4skidfg2berlak35sxfagpijo');
define('SECURE_AUTH_SALT', 'rmllkdx6nnvz1spziqf4xciesarigbvzp5fby4zif9mydtv625vrtcoqmubwa84s');
define('LOGGED_IN_SALT',   'goqumngezritde9ulxqgmtdlzt7xgtzd6u263bblpvar6jnvegzsccklma8e4pey');
define('NONCE_SALT',       'khxluucdjvqj3ts6gmuxysympyenm9dt5qtkxli0xclha8e3lrk3mwhbtlqcis2e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpp3_';

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

define('WP_HOME', 'https://ljholiday.com');
define('WP_SITEURL', 'https://ljholiday.com');
