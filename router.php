<?php
require_once('./templates/header.php');
require_once('./app/controllers/Controller.php');

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

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
$taskController = new Controller();

switch ($params[0]) {
    case 'biblioteca':
        echo '<h1>Biblioteca</h1>';
        $taskController->show_biblioteca();
        break;
    case 'privado':
        echo '<h1>Privado</h1>' ; 
        break;
    case 'inicio':
    default:
        echo '<h1>Inicio</h1>';
        break;
}
