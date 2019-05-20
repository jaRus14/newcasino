<?php

require_once __DIR__ . '/../app/Config.php';
require_once __DIR__ . '/../app/Model.php';
require_once __DIR__ . '/../app/Controller.php';

$map = array(
    'inicio' => array('controller' =>'Controller', 'action' =>'inicio'),
    'listarFichas' => array('controller' =>'Controller', 'action' =>'listarFichas'),
    'ver' => array('controller' =>'Controller', 'action' =>'ver'),
    'login' => array('controller' =>'Controller', 'action' =>'login'),
    'logout' => array('controller' =>'Controller', 'action' =>'logout'),
    'carrito' => array('controller' =>'Controller', 'action' =>'carrito'),
    'anadirCesta' => array('controller' =>'Controller', 'action' =>'anadirCesta'),
    'quitarCesta' => array('controller' =>'Controller', 'action' =>'quitarCesta'),
    'registro' => array('controller' =>'Controller', 'action' =>'registro'), 
    'insertarUsuario' => array('controller' =>'Controller', 'action' =>'insertarUsuario'),
    'compraConfirmada' => array('controller' =>'Controller', 'action' =>'compraConfirmada'),
    'usuario' => array('controller' =>'Controller', 'action' =>'usuario'),
    'editarUsuario' => array('controller' =>'Controller', 'action' =>'editarUsuario'),


    // integracion
    'tragaperras' => array('controller' =>'Controller', 'action' =>'tragaperras'),
    'bingo' => array('controller' =>'Controller', 'action' =>'bingo'),
    'ruleta' => array('controller' =>'Controller', 'action' =>'ruleta'),
    'contacto' => array('controller' =>'Controller', 'action' =>'contacto')

);




if (isset($_GET['ctl'])) {
    if (isset($map[$_GET['ctl']])) {
        $ruta = $_GET['ctl'];
    } else {
        header('Status: 404 Not Found');
        echo '<html><body><h1>Error 404: No existe la ruta <i>' . $_GET['ctl'] . '</p></body></html>';
        exit;
    }
} else {
    $ruta = 'inicio';
}

$controlador = $map[$ruta];

if (method_exists($controlador['controller'],$controlador['action'])) {
    call_user_func(array(new $controlador['controller'], $controlador['action']));
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Error 404: El controlador <i>' . $controlador['controller'] . '->' . $controlador['action'] . '</i> no existe</h1></body></html>';
}
