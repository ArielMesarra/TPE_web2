<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('INICIO', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/inicio');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/logIn');
define('BIBLIOTECA', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/biblioteca');

require_once './app/views/staticView.php';
$staticView = new StaticView();
$staticView->showHeader();
require_once './app/controllers/bibliotecaController.php';
require_once './app/controllers/loginController.php';
require_once './app/controllers/registerController.php';
require_once './app/controllers/descripcionController.php';
require_once './app/controllers/BorrarController.php';


require_once './app/controllers/EditarController.php';
require_once './app/controllers/AgregarController.php';


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



$taskEditarController = new EditarController();

$taskBorrarController = new BorrarController();
$taskdescripcionController = new DescripcionController();
$taskbibliotecaController = new bibliotecaController();
$taskregisterController = new registerController();
$taskloginController = new loginController();
$taskAgregarController = new AgregarController();


switch ($params[0]) {
    case 'biblioteca':
        echo '<h1>Biblioteca</h1>';
        $taskbibliotecaController->showBiblioteca();
        break;
    case 'cancion':
        $taskdescripcionController->showDescripcion($params[1]);
        break;
    case 'register':
        $taskregisterController->showRegister();
        break;
    case 'logIn':
        $taskloginController->showLogin(); 
        break;
        
    case 'accionBorrarArtista':
            // var_dump($_POST);
            $taskBorrarController->borrarArtista($_POST['borrar']);
            break;
            case 'accionBorrarCancion':
                var_dump($_POST);
                $taskBorrarController->borrarCancion($_POST['borrar']);
                
                break;
                
    case 'accionEditarArtista':
        echo $_POST['editar'];
        // var_dump($_POST);
        $taskEditarController->editarArtista($_POST['editar'],$params[1]); 
        
        break;

    case 'accionEditarCancion':
        // var_dump($_POST);
        $taskEditarController->editarCancion($_POST["editar"]);
        break;

    case 'accionProcederCancion':
        echo 'proc cancion \n';
        // echo $params[0];
        // var_dump($_GET);
        
        echo $params[1];
        // echo $params[2];
        if ($params[1]=="Editar"){
            $taskEditarController->confirmaEditarCancion($params[2],$_POST);

        }
        break;

    case 'accionProcederEditarArtista':
        if ($params[1]=="Editar") {
            $taskEditarController->editarArtistaProceder($params[2]);
        }else{
            // echo 'llego bien al ruter';
            $taskAgregarController->confirmaAgregarArtista($_POST);
        }
        
        break;


    case 'signOut':
        $taskloginController->signOut();
        break;

    case 'agregar':
        if ($_POST["funcion"]=="cancion"){
            echo 'agregar cancion';
            $taskAgregarController->cancion();

        }else{
            echo 'agregar artista';
            $taskAgregarController->artista();
        }
        break;

    case 'inicio':
    default:
        echo '<h1>Inicio</h1>';
        break;
}
$staticView->showFooter();


