<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'gadmur' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '5p1Bu$_T $3ULWBNa`GuT+`]3C~:ya,ZdX*?(i>QfvcIWSw(hw~ZP`4;%F]D8#{Q' );
define( 'SECURE_AUTH_KEY', '!36kh|[sqe]hjG7F{%%mi#3L&[i}v?(@^ILQv=<r@^#c>ff9r1kA}m^8;/F0?W9j' );
define( 'LOGGED_IN_KEY', '8Kr~p`~o3MEh,a5%P]6qHT2bn<yE$%3y%/3bwCqRCVGKRjR`A  zjx;13s@4@|7g' );
define( 'NONCE_KEY', 'ib10j|h^>6x!6<_;5.IO}Ih8Ywl7p53:7,0a<|Acvb^PnYwy?3+<Xi?c,J/}!4H;' );
define( 'AUTH_SALT', '42tW>-V~>|nb}?&)&tstC^}_])U6$^YS3KXA;Du=_w)SGNpFt/7)^tPs>i1XNG#T' );
define( 'SECURE_AUTH_SALT', '5rADJ8Z67,24S3Ip8q.r6D$/,c$yHXfVDAu]iB2%Kw,@!j;3Al?oH8VyR6xv{}Lf' );
define( 'LOGGED_IN_SALT', 'j&/-Ge);HQb/x($vi~jpjyb=}VDH&_<_)a7z(Y{Qvl5m(vM.I:ns<O:Qxr:4b0bl' );
define( 'NONCE_SALT', '_`NsyJ[3?5%gy+ZLQvb{2qKhuB/oaYxn[C&&7jSI&S4eS-/+Yv+h=._kN ,PemnO' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


/*** FTP login ***/
define("FTP_HOST", "host-ftp");
define("FTP_USER", "nombre-usuario-ftp");
define("FTP_PASS", "password-ftp");
/*** Definir FS_METHOD en WordPress para actualizar de manera automatica sin FTP ***/
define("FS_METHOD","direct");

