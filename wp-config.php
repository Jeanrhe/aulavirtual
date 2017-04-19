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
define('DB_NAME', 'aulavirtual');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'tMBi9`mJtXfy?2V|_/G}0l{c3W,dT:D`Ks_fiBY)YLiSElG!iT6s|R!C|I*(d4]e');
define('SECURE_AUTH_KEY', 'qxS%ea($~[G(lM$#Yz@2C_dR(88/BGha</2}Xvz%32.z25Y:@3jh1RjCJ#v#/iE~');
define('LOGGED_IN_KEY', '9d}zzx=K#@sl,)m|>/LoG(HdVh ?<JXTlYHL+!lb+P wZp#2+92^K7&+`]|,JNOk');
define('NONCE_KEY', 'B.JFiw~QZ@8w*<>`^b!L7m]Z%DSKt?imp|@emp0|B:!|thl!6y;XzNvPCCsODni>');
define('AUTH_SALT', '+HH3{B.Up7|Y6 (vc0lOmC#r.:IJ<c4W,/y36/Yh)swCc%:Jw)bg`V?P[DsZYP,|');
define('SECURE_AUTH_SALT', '|Kt%~dkRy-TnXgz]5E3_U +?_zsjD]H1ar*:Cq2V)Cq2Ep>r^*DDhjfWo+=h7emN');
define('LOGGED_IN_SALT', '#,X1CLoC+=s@lq;=6ex<1aj Ku!;!uDWK,aG>wKAp&g(d2y6/MQi6l&e.Tk5qrcG');
define('NONCE_SALT', 'G++mSA2cZG!$,(zANNR!yiDCI-C^-QPMu&+|N:qjZs`wPjV-c:]>=y8,CwlnO26?');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

