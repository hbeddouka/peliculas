<?php


include_once("configuracion.php");

class ConexionBD {

//---------------------------
$dbhost = constant("DB_HOST"); // Host name 
$dbport = constant("DB_PORT"); // Host port
$dbusername = constant("DB_USER"); // Mysql username 
$dbpassword = constant("DB_PASS"); // Mysql password 
$db_name = constant("DB_NAME"); // Database name

//Metodo para abrir una conexión a la base de datos
//$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, "", DB_PORT) or die("Error: " . mysqli_error($connection));
//mysqli_select_db($connection, DB_NAME) or die("Error: " . mysqli_error($connection));
    
    
//----------------------------
    var $host;
    var $port;
    var $usuario;
    var $password;
    var $bd_nombre;
    var $con;

        
    //Constructor de la clase
    function ConexionBD() {

        $this->host = DB_HOST;
        $this->port = DB_PORT;
        $this->usuario = DB_USER;
        $this->password = DB_PASS;
        $this->bd_nombre=DB_NAME;
    }


    //Metodo para abrir una conexión a la base de datos
    function conectar_bd() {
       $this->con=mysqli_connect($this->host,$this->usuario, $this->password, "", $this->port) or die ("Error conectando a la base de datos.");
       mysqli_select_db($this->con, $this->bd_nombre) or die("Error: " . mysqli_error($this->con));
        return $this->con;

    }

    //Metodo para cerrar una conexión
    function cerrar_conexion() {
       mysqli_close($this->con) or die("Error al cerrar la conexión con la base de datos.");
    }

}

?>
