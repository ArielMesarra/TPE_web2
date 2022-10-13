<?php
require_once './templates/header.tpl';
require_once './app/controllers/bibliotecaController.php';
require_once './app/controllers/loginController.php';
require_once './app/controllers/registerController.php';
require_once './app/controllers/signoutController.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('INICIO', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/inicio');

//recibir/leer la accion
if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'inicio';
}

// parseo el string de action por "/" y me devuelve el arreglo
// $accion = "/tabla/asd" me llega en la variable "$accion" como un string

$params = explode('/', $accion);
// $params = ['tabla','asd']
$taskController = new bibliotecaController();
$taskregisterController = new registerController();
$taskloginController = new loginController();
$tasksignoutController = new signoutController();

switch ($params[0]) {
    case 'biblioteca':
        echo '<h1>Biblioteca</h1>';
        $taskController->showBiblioteca();
        break;
    case 'register':
        $taskregisterController->showRegister();
        break;
    case 'logIn':
        $taskloginController->showLogin(); 
        break;
    case 'signOut':
        $tasksignoutController->signOut();
        break;
    case 'inicio':
    default:
        echo '<h1>Inicio</h1>';
        break;
}

require_once './templates/footer.tpl';
