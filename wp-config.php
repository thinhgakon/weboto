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

define('DB_NAME', "admin_banoto");


/** MySQL database username */

define('DB_USER', "root");


/** MySQL database password */

define('DB_PASSWORD', "");


/** MySQL hostname */

define('DB_HOST', "localhost");


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

define('AUTH_KEY',         '.M_@bt/4b:2O(w{Lz <6~K|f7DkZkP>f(+?FB>{Rg_)ow)F@7>^D/mVLknsM`,ct');

define('SECURE_AUTH_KEY',  'C)Q?irBEr8]?2UKOHWIi~tNKe=J0r2X0kloR#nnj!Y{UWSXD+wmA$KQNt3`?jg+C');

define('LOGGED_IN_KEY',    'sYjp_<C2t_&$7;Hdu7X[%v-90}a$ v`(U%@s^Ha/!Jo,_PS!hq/!F@q,cZ,@#BcP');

define('NONCE_KEY',        'Q]cEY.uq!O.b4xJBsqd{7r /5P+^tKLukyK2lzsTcL tq_IVeT%W6#k9;M`dvQx}');

define('AUTH_SALT',        'zpnX6Tem&gp%|f0< OClGW)IO {r+YA3U<}cQS<GK<EG@@3|2}10$9!(`tPpJl0-');

define('SECURE_AUTH_SALT', '_IOg.r!PFEG8)IUml,ki}TzE|_Tjyw42L6`e!1RY$C w<w^%L,%|)95TFy24cp2,');

define('LOGGED_IN_SALT',   '}$/6b+p!A%r?q66o)SEW0v:4U<IC+ m]dqJMAPA.o(9ZCw5^ql *L^~lkh6%MZW@');

define('NONCE_SALT',       'g%_RUbp`wHa|V65S.[8ck8XXFmCg=cA(.`dwKp&g@S-rz81p:<QY3vR25i&Et8KF');


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

