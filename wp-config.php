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
define( 'DB_NAME', 'viajes' );

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
define( 'AUTH_KEY', 'm|keXq.9TjdPU1QwbOS0}-yBd)w46c{dfR2o5|l-*r9}F~EMJFW$Zt!_ikEiqsm2' );
define( 'SECURE_AUTH_KEY', '2r>!r,UKp+L*9hykSdY0R^5WH;ZgfvFfa$[PGeWtNeL!o);rs5,!H~Qz_#1=TzLv' );
define( 'LOGGED_IN_KEY', 'hAys13^vA_O6KeN~48vCzT_3WX]A@hq9YEmAdt}8JEUc^9V?61X0M;E`X..,sg$V' );
define( 'NONCE_KEY', 'ElX4}3q}!iM$6Z4837, $G33%v^r/tO2_a*)!%9rqt^sz%58nV1dh3HJ_9iW43j]' );
define( 'AUTH_SALT', 'xzXob9t7+#4i=]9[NH}@G:u>f^@[#/IN?@Rw.a{Fn5DebsDfx}kKi/Mp>pj+@TDu' );
define( 'SECURE_AUTH_SALT', '3B9q__J+YVPn>&W+!3:ksGQVIpoe<cjWm} 8)IZ?5Xs8XqFRVxqpJVBr%,U?6di%' );
define( 'LOGGED_IN_SALT', 'ecq4yr*M[R*Yn-!b(A`d_s~d-jh*7L}sy$YKV@6q;AQ&E=;@2@vwpEMakX>Lf3]s' );
define( 'NONCE_SALT', 'fMgX7)*+:V_NgZ0*5mLCT!/6*XzrSj|[4}aDWJbAA&vm_lC!!eZk}K]:Bj|L#ET(' );

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

