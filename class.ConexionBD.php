<?php


include_once("configuracion.php");

class ConexionBD {


    var $host;
    var $port;
    var $usuario;
    var $password;
    var $bd_nombre;
    var $con;

        
    //Constructor de la clase
    function ConexionBD() {

        $this->host = BD_SERVIDOR;
        $this->port = BD_PORT;
        $this->usuario = BD_USUARIO;
        $this->password = BD_PASSWORD;
        $this->bd_nombre=BD_NOMBRE;
    }


    //Metodo para abrir una conexión a la base de datos
    function conectar_bd() {
       $this->con=mysqli_connect($this->host,$this->usuario, $this->password, $this->bd_nombre, $this->port) or die ("Error conectando a la base de datos.");
       return $this->con;
    }

    //Metodo para cerrar una conexión
    function cerrar_conexion() {
       mysqli_close($this->con) or die("Error al cerrar la conexión con la base de datos.");
    }

}

?>
