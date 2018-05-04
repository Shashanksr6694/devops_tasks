<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ';w-X[7U)]+YtI%/5G!?fxZfq&Ta7QH$,I|SYw$]Na08OykiI]94PhWLlO+iu;bmT');
define('SECURE_AUTH_KEY',  'F-SRGWEQz#mQ[+kJe7uH2X5|nos.;p6D=hwGPde9oil(~g?+g}=S(Y4pl,_&EKc{');
define('LOGGED_IN_KEY',    '2~G2boLno+6 ezs`ulL$FjU24T`%v&}*ZthuR-HRNk&|uQKTn.;`!@R{OulezY%>');
define('NONCE_KEY',        'm^J+Ax6pluie. *2oN4B<xjvj|LF^~J,?PxEPz<hr&Xj.S@?/EE|s !GYj=ZLZ7f');
define('AUTH_SALT',        '0%98Vx9Y-yPJ})u+X[x)8a7*fxTP53SvL0JpQ?A312|4TYNOY#f-Y4|}[:+rt/Ih');
define('SECURE_AUTH_SALT', ',)Pr.6x(FgoF~Vfu PQ4YtaU$Q1>nz38*z/Ac3]*;)JkSospX%pGA<*jl{yo-Kqg');
define('LOGGED_IN_SALT',   '.UR1q,||}aC.CB[G=_gE!+8= nCo7(=HRXC1[I<&J[sY=w:StJI~3-T1tekv(?-5');
define('NONCE_SALT',       '=l W9<E>/&|~wop ArEO-]j#}3t`AcPxoVdbg<eY|$!a2:*rj`UL5|kLaJ-5EGv5');


$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
