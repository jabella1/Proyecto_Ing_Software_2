<?php
session_start();
require_once 'autoload.php'; /* CARGA EL AUTOLOAD PARA TENER ACCESO A TODOS LOS CONTROLADORES, TODAS LAS CLASES */
require_once 'config/db.php';
require_once './config/parameters.php';
require_once './helpers/utils.php';
require_once './views/layout/header.php';
require_once './views/layout/sidebar.php';



function MostrarError() {
    $error = new ErrorController();
    $error->index();
}

if (isset($_GET['controller'])) { /* SE COMPRUEBA SI LLEGA EL CONTROLADOR POR LA URL */
    $nombre_controlador = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) { // condicion para que entre al inicio la primera vez
    $nombre_controlador = controller_defecto;
} else {
    MostrarError();
    exit(); /* para parar ejecucion y lo de abajo no lo ejecute */
}


/*
 * primero se verifica si el controlador existe, de ser asi se procede a verificar si el metodo existe.
 * 
 * ejemplo * https://www.youtube.com/?controller=UsuarioController&action=crear
 * suponiendo que exista un controlador llamado UsuarioController y un metodo que se llame crear, funcionaria todo normal
 */
if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {

        /* de esta manera se llama o invoca al metodo que tenemos en nuestra clase */
        /* _GET funciona de la siguiente manera ejemplo : 
         * https://www.youtube.com/?action=crear
         * entonces la variable tomaria el valor de "crear" y ese metodo seria al que hace el llamado el controlador.
         * por tanto dinamicamente en funcion de la url me saca una cosa de un metodo o de otra
         */
        $action = $_GET['action'];
        $controlador->$action();
    } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) { // condicion para cuando se actualice la pag
                                                                        // vaya a la accion por defecto que en este caso
                                                                        // es la view para registro de usuario
        $action_defecto = action_defecto;
        $controlador->$action_defecto();
    } else {
        MostrarError();
    }
} else {
    MostrarError();
}

/* isset es una condicion para verificar si la variable get existe */
require_once './views/layout/footer.php';

