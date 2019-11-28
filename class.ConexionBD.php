<?php


include_once("configuracion.php");

class ConexionBD {

//---------------------------


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
   


    //Metodo para abrir una conexión a la base de datos
    function conectar_bd() {
       $this->con=mysqli_connect(DB_HOST, DB_USER, DB_PASS, "", DB_PORT) or die("Error: " . mysqli_error($this->con));
       mysqli_select_db($this->con, DB_NAME) or die("Error: " . mysqli_error($this->con));
        return $this->con;

    }

    //Metodo para cerrar una conexión
    function cerrar_conexion() {
       mysqli_close($this->con) or die("Error al cerrar la conexión con la base de datos.");
    }

}

?>
