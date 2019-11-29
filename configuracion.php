<?php 

// Path de las clases y de las paginas estandar
define("CLASS_PATH", dirname($_SERVER['PHP_SELF'])."/");
define("APPLICATION_PATH", dirname($_SERVER['PHP_SELF'])."/");

//Configuración de la conexion a la base de datos
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST').":".getenv('OPENSHIFT_MYSQL_DB_PORT'));
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME', getenv('OPENSHIFT_GEAR_NAME'));

//Configuración de logitudes minimas del login y el password de los usuario
//normales
define ("LONGITUD_MINIMA_LOGIN", 6);
define ("LONGITUD_MINIMA_PASSWORD", 6);

//Configuración del numero de resultados de paginación por cada pagina
define ("PAGINACION", 10);

?>
