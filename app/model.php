<?php

class Model {
    protected $conexion;

    public function __construct($dbname, $dbuser, $dbpass, $dbhost) {
        $mvc_bd_conexion = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($mvc_bd_conexion->connect_error) { 
            die('Error de Conexión (' . $conexion->connect_errno . ') ' . $conexion->connect_error);
        }    
        $mvc_bd_conexion->set_charset("utf8");
        $this->conexion = $mvc_bd_conexion;
    }

    public function bd_conexion() {

    }

    public function dameFichas() {
        $sql = "select * from fichascasino order by precio asc";
        $result = $this->conexion->query($sql);
        $fichas = array();
        while ($row = $result->fetch_assoc()) {
            $fichas[] = $row;
        }
        return $fichas;
    }
    
    public function dameFicha($id) {
        $id = htmlspecialchars($id);
        $sql = "select * from fichascasino where id=".$id;
        $result = $this->conexion->query($sql);
        $fichas = array();
        $row = $result->fetch_assoc();
        return $row;
    }

    public function login($correo, $contrasenna) {
        $correo = htmlspecialchars($correo);
        $sql = "select * from usuarios where correo like '$correo' and contrasenna like '$contrasenna'";
        $result = $this->conexion->query($sql);
        $usuario = array();
        while ($row = $result->fetch_assoc()){
            $usuario[] = $row;
        }
        return $usuario;
    }

    public function insertarUsuario($nombre, $apellido, $correo, $fichas, $contrasenna){
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, fichas, contrasenna) VALUES ('$nombre', '$apellido', '$correo', '$fichas', '$contrasenna')";
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function dameUsuario($id){

        $sql = "select * from usuarios where id=$id";

        $result = $this->conexion->query($sql);
        $usuarios = array();
        $row = $result->fetch_assoc();

        return $row;
    }

    public function editarUsuario($id, $nombre, $apellido, $correo, $contrasenna){

        if($contrasenna == null){
            $sql = "UPDATE usuarios SET nombre ='$nombre', apellido ='$apellido', correo ='$correo', contrasenna ='$contrasenna' WHERE id ='$id'";
        } else {
            $sql = "UPDATE usuarios SET nombre ='$nombre', apellido ='$apellido', correo ='$correo', contrasenna ='$contrasenna' WHERE id ='$id'";    
        }       

        $result = $this->conexion->query($sql);

        return $result;
    }


    /* sumarFichas
    public function sumarFichas($correo, $contrasenna) {
        $id = htmlspecialchars($id);
        $sql = "select * from fichascasino where id=".$id;

        // update
        $sql = "UPDATE fichascasino SET nombre ='$nombre', apellido ='$apellido', correo ='$correo',fichas ='$fichas' WHERE id ='$id'";

        $result = $this->conexion->query($sql);
        $fichas = array();
        $row = $result->fetch_assoc();
        return $row;
    }
*/

public function dameUsu(){

    $sql = "select * from usuarios";
    $result = $this->conexion->query($sql);
    $usuarios = array();
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
    return $usuarios;

}

}