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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'k/9vk1xvjubpeMZ4vqRMoF6PA7SQnU8+m/+RsGKDLSX+jmUe0oHF4XRlJtSNC54jf/VBWW0Qug+gmaOzzEfdUg==');
define('SECURE_AUTH_KEY',  'MfSczETApSQnRPTNq8+CFDROzoD7UkvlTEaA+97FP1wdTavMYp8JKvz3aS3EX+UjGibRkeV8ll/cJLoqf2uKFw==');
define('LOGGED_IN_KEY',    '9knt5DQ1UVqSdcJDNifEMvFf0JQodtBR8+ZI4+F88fVIe6c5z7Hma4DIG4a2ILT6eTLIi8Hs+1VGNokCWipQgg==');
define('NONCE_KEY',        'GJq2YaiGz/kAwFvaAUzX906U33sOY7qnpxRI/YO5Pb9xmHNFuQlPw/q2iEHcmDosVzA+6Iwt53kwCBzQ0TzZKg==');
define('AUTH_SALT',        'TApoF8EsQEhZRXKKXQyJ5IXngJTgqZucjOTBQ+RPYilEc43T/MAHRhG34W+1LEC7eiyf80IWEsj82gsHg8+T9g==');
define('SECURE_AUTH_SALT', 'NkjVjt9gixAljXxEMq5WXbLPE6+WKCr2m92QL7P0gh9o5yohCbzh83piACt1onZgyX9jc0o19PMxiTvxHbxqCw==');
define('LOGGED_IN_SALT',   'yodhxY3Hjryy5Y/iYsXtKeo/uyvtXdjb0C07QBlixlNUh3sSFBhJZ3GTLeZQGHStTIXibx3UUR/t6GkjhVFn7A==');
define('NONCE_SALT',       'MBbBPu5LmELPUmavn4ELgR+ZosQSIR8NfwSx/4/HqASibpAy1lKJMX0RjE9qfYLIWRe4stlh/YwGSDHKqGsmnA==');

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
