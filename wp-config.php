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
define('DB_NAME', 'mym_db');

/** MySQL database username */
define('DB_USER', 'mym_user');

/** MySQL database password */
define('DB_PASSWORD', 'YOpjYpiSWEKQv6vcXJKp');

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
define('AUTH_KEY',         'Vp:w{mj_zyVk4O#/C`F+p=I1Y (6eU]fzs-Ok15vnh5mLzMl<vWHE; v]WSFU-8#');
define('SECURE_AUTH_KEY',  'G%(HPc:dd//hwM( HRbO1DUh6d}06{Pl90>2EH|v9e.?$wjAE$#,= (sOpq.MA6,');
define('LOGGED_IN_KEY',    'rfFG?3&bTOW8#X/s0z<][g|xA*F4`~,[NE4-~)HFsf)aXWld)8f<+qP:HYwi]:mm');
define('NONCE_KEY',        '1:$o)gp0}ZsP5IUcVj$@#1:JH%S:14;:FTmnt6@%]`j`6uP[%tPy<@hj_@ Z/OA-');
define('AUTH_SALT',        '9>nTLWglXaAggDyZKUHV15@.t,Q!.| 2fm3MYSNgVh.88{XZ=Q-}N-aAvv:Hg|Q*');
define('SECURE_AUTH_SALT', '$ v)OgYTwJ3hbyu*s@X46h43LkrXh]<4@=FJ?`#G@EwIV+J@/Oop{(<_`RdMB>&C');
define('LOGGED_IN_SALT',   'Uknd h:xdp%Vm@h|Hlj1:t500Kp^Z^{hEQD905xXQ^u+(6}W0_d%nBLF]%ndQ)t_');
define('NONCE_SALT',       'y~$=ORf5f(^T]l3(SvRgKc]v; eq1u6Ck{B`)TAUU(d,f$ECo+9q}Mm6,t))?*#Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mym_';

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
