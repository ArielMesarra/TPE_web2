<?php
require_once './templates/header.tpl';
require_once './app/controllers/bibliotecaController.php';
require_once './app/controllers/loginController.php';
require_once './app/controllers/registerController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('INICIO', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/inicio');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/logIn');
define('BIBLIOTECA', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/biblioteca');

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
$taskbibliotecaController = new bibliotecaController();
$taskregisterController = new registerController();
$taskloginController = new loginController();

switch ($params[0]) {
    case 'biblioteca':
        echo '<h1>Biblioteca</h1>';
        $taskbibliotecaController->showBiblioteca();
        break;
    case 'cancion':
        echo $params[1];
        break;
    case 'register':
        $taskregisterController->showRegister();
        break;
    case 'logIn':
        $taskloginController->showLogin(); 
        break;
    case 'signOut':
        $taskloginController->signOut();
        break;
    case 'inicio':
    default:
        echo '<h1>Inicio</h1>';
        break;
}

require_once './templates/footer.tpl';
