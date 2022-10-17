<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('INICIO', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/inicio');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/logIn');
define('BIBLIOTECA', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/biblioteca');

require_once './app/controllers/InicioController.php';
require_once './app/controllers/StaticController.php';
require_once './app/controllers/bibliotecaController.php';
require_once './app/controllers/loginController.php';
require_once './app/controllers/registerController.php';
require_once './app/controllers/descripcionController.php';
require_once './app/controllers/BorrarController.php';
require_once './app/controllers/EditarController.php';
require_once './app/controllers/AgregarController.php';
require_once './app/AuthHelper/AuthHelper.php';




$taskStaticController = new StaticController();
$taskInicioController = new InicioController();
$taskEditarController = new EditarController();
$taskBorrarController = new BorrarController();
$taskdescripcionController = new DescripcionController();
$taskbibliotecaController = new bibliotecaController();
$taskregisterController = new registerController();
$taskloginController = new loginController();
$taskAgregarController = new AgregarController();
$helper=new AuthHelper();


$taskStaticController->mostrarHeader();


$accion = $_GET['action'];
$params = explode('/', $accion);
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
    case 'signOut':
        $taskloginController->signOut();
        break;
            
    
    
    case 'accion':
        if ($helper->checkLoggedIn()){

            switch ($params[1]){
            case 'BorrarArtista':
                $taskBorrarController->borrarArtista($_POST['borrar']);
                break;

            case 'BorrarCancion':
                $taskBorrarController->borrarCancion($_POST['borrar']);
                break;
                    
            case 'ConfirmarBorrarArtista':
                $taskBorrarController->confirmarBorrarArtista($_POST['confirm'],$params[2]);
                break;
                
            case 'EditarArtista':
                $taskEditarController->editarArtista($_POST['editar'],$params[2]); 
                break;
            
            case 'EditarCancion':
                $taskEditarController->editarCancion($_POST['editar']);
                break;
            
            case 'ProcederCancion':
                if ($params[1]=="Editar"){
                    $taskEditarController->confirmaEditarCancion($params[3],$_POST);
                }else{
                    $taskAgregarController->confirmaAgregaCancion($_POST);
                }
                break;
            case 'ProcederEditarArtista':
                if ($params[2]=="Editar") {
                    $taskEditarController->editarArtistaProceder($params[3]);
                }else{
                    $taskAgregarController->confirmaAgregarArtista($_POST);
                }
                break;
            case 'agregar':
                if ($_POST["funcion"]=="cancion"){
                    $taskAgregarController->cancion();
                }else{
                    $taskAgregarController->artista();
                }
                break;
            }
            break;
        }



    case 'inicio':
    default:
        $taskInicioController->mostrar();
        break;
}
$taskStaticController->mostrarFooter();


