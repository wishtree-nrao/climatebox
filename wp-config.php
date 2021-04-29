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

define( 'DB_NAME', 'i7307447_wp2' );



/** MySQL database username */

define( 'DB_USER', 'i7307447_wp2' );



/** MySQL database password */

define( 'DB_PASSWORD', 'T.IzwhZZ5VRnnmMvQzO90' );



/** MySQL hostname */

define( 'DB_HOST', 'localhost' );



/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );



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

define('AUTH_KEY',         'WMDrPLXlKffwQ5BxcicPn5bXkbmK9XXRkD8sN6TQIlDovgNB5dkWKADOPWHFto8J');

define('SECURE_AUTH_KEY',  'nVCtltUL1K3xIhtm4vRVIXIP8bQPkXXbNTxSw6vDPhVUEvHOpMSoKEIUaMEraxqo');

define('LOGGED_IN_KEY',    '9AsgxUOTFVgEmhZThggjnLgYZGIQOZ60cE5w6Zsi7SYcTz5vcz4u5QjvhKeU0zqK');

define('NONCE_KEY',        'F8hveC8yyMVXcMd9ZrDHS32A4K4V01aLKmaCvLa8SumJwbooNRWez3sJ8shYhNE5');

define('AUTH_SALT',        'ZRt0NhkfsAN5jdb1GSMiR2MIxuQ4cWS2K676NsfVGuwVme8iVgBE94cjM3u7Itpe');

define('SECURE_AUTH_SALT', 'qw1iN8cd5CWZpYOljqN7PI7gxd47GV2zd6Xw0IuXK5i1xeeTwJD8bMo6jwqrU1Ce');

define('LOGGED_IN_SALT',   'Qh8vSSYvifodnt2pnfIggYADS8G8YsjhU7UlS5YOFbxwhN1x3AJxNDHsDvVFO9i5');

define('NONCE_SALT',       '2nAZDjiMsu1A4bSIU2pCISP6pUUAR0KMbEd0avXOXCgtfZz5iWvMPPrYyUb5ZlbI');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed externally by Installatron.

 * If you remove this define() to re-enable WordPress's automatic background updating

 * then it's advised to disable auto-updating in Installatron.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);





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

