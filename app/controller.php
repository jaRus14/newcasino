<?php

class Controller {

    public function inicio() {
        require __DIR__ . '/templates/inicio.php';
    }

    public function listarFichas() {
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        $params = array('fichas' => $m->dameFichas());
        require __DIR__ . '/templates/listaFichas.php';
    }

    public function ver() {
        if (!isset($_GET['id'])) {
            throw new Exception('Página no encontrada');
        }
        $id = $_GET['id'];
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        $ficha = $m->dameFicha($id);
        $params = $ficha;
        require __DIR__ . '/templates/verFicha.php';
    }

    public function login() {
        $params = array('correo' => '', 'contrasenna' => '');
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $resultados = $m->login($_POST['correo'],$_POST['contrasenna']);
            session_start();
            foreach ($resultados as $resultado){
                $_SESSION['id'] = $resultado['id']; 
                $_SESSION['nombre'] = $resultado['nombre'];
                $_SESSION['correo'] = $resultado['correo'];                
            }
            $_SESSION['cesta'] = array();             
        }
        $this->inicio();        
    }
	
    public function logout(){
        session_start();
        session_destroy();
        $this->inicio();  
    }

    public function carrito() {
        session_start();
        require __DIR__ . '/templates/carrito.php';
    }

    public function anadirCesta(){
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);   
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ficha = $m->dameFicha($_POST['idFicha']);
            session_start();
            $add = true;
            if(isset($_SESSION['nombre'])){
                foreach ($_SESSION['cesta'] as $value) {
                    if($value["id"] == $_POST['idFicha']){
                        $add = false;
                    }
                }
                if($add){
                    array_push($_SESSION['cesta'], $ficha);
                } else{

                }
            }
        }
        require __DIR__ . '/templates/carrito.php';
    }

    public function quitarCesta(){
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if(isset($_GET['pos'])){
                foreach ($_SESSION['cesta'] as $key => $value) {
                    if($value["id"] == $_GET['pos']){
                        unset($_SESSION['cesta'][$key]);
                    }
                }
            } else {
                $_SESSION['cesta'] = array();
            }
        } 
        require __DIR__ . '/templates/carrito.php';
    }
    
    public function registro(){         
        require __DIR__ . '/templates/registro.php';
    }

    public function insertarUsuario(){
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

       if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
           $nombre = $_POST["nombre"];
           $apellido = $_POST["apellido"];       
           $correo = $_POST["correo"];          
           $fichas = $_POST["fichas"];          
           $contrasenna = $_POST["contrasenna"];  

           $m->insertarUsuario($nombre, $apellido, $correo, $fichas, $contrasenna);
         
           require __DIR__ . '/templates/inicio.php';
        }
    }

    public function usuario(){

        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);   

       if ($_SERVER['REQUEST_METHOD'] == 'GET') {
           $params = array(
               'perfil' => $m->dameUsuario($_GET['id']),
           );
        }
        require __DIR__ . '/templates/perfil.php';
    }


    // Queda implementar el update para sumar las fichas al usuario
    public function compraConfirmada() {
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        session_start();
        $mensaje = '<br/>';
        $total = 0;
        foreach ($_SESSION["cesta"] as $producto) :            
            $mensaje = $mensaje . $producto['nombre'] . ' - ' . $producto['precio'] . ' € <br>';
            $total = $total + $producto['precio'] ;
            // $m->eliminarJugador($producto['id']); // Esto eliminaria el coche de la base de datos al comprarlo
        endforeach;  
        $mensaje = $mensaje . ' Por un total de: '. $total. " € <br>";
        $_SESSION['cesta'] = array();

        // aqui se hace el update a la columna fichas de la base de datos

        require __DIR__ . '/templates/compraConfirmada.php';
    }

     public function editarUsuario(){

        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                    Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

       if ($_SERVER['REQUEST_METHOD'] == 'POST') {  

           $id = $_POST["id"];
           $nombre = $_POST["nombre"];
           $apellido = $_POST["apellido"];
           $correo = $_POST["correo"];
           $_SESSION['nombre'] = $nombre; 

           if(isset($_POST['contrasenna'])){
               $contrasenna = $_POST["contrasenna"];
           } else {
               $contrasenna = null;
           }


           $m->editarUsuario($id, $nombre, $apellido, $correo, $contrasenna);            
            

           $params = array(
               'perfil' => $m->dameUsuario($id),
           );
         
           require __DIR__ . '/templates/perfil.php';
        }
        

    }



    public function tragaperras() {
        
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

       $params = array('usuarios' => $m->dameUsu());        
       
       $prueba = array(

           'mensaje' => 'Bienvenido al curso de symfony 1.4',

           'fecha' => date('d-m-yyy'),

       );
        
        require __DIR__ . '/templates/tragaperras.php';
    }

    public function blackjack() {
        require __DIR__ . '/templates/blackjack.php';
    }

    public function ruleta() {
        require __DIR__ . '/templates/ruleta.php';
    }

    public function contacto() {


/*
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

       if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
           $nombre = $_POST["nombre"];
           $apellido = $_POST["apellido"];       
           $correo = $_POST["correo"];          
           $fichas = $_POST["fichas"];          
           $contrasenna = $_POST["contrasenna"];  

           $m->insertarUsuario($nombre, $apellido, $correo, $fichas, $contrasenna);
         
           require __DIR__ . '/templates/inicio.php';
        }
*/

        require __DIR__ . '/templates/contacto.php';
    }


}

