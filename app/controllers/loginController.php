<?php
require_once './app/views/loginView.php';
require_once './app/models/loginModel.php';
require_once './app/AuthHelper/AuthHelper.php';
class loginController{
    private $model;
    private $view;
    private $helper;

    function __construct(){
        $this->helper = new AuthHelper();
        $this->model = new loginModel();
        $this->view = new loginView();
    }

    function showLogin(){
        session_start();
        if($this->helper->checkLoggedIn()){
            $this->helper->yaEstas();
        }
        else{
            $this->view->showFormLogin();
            if(!empty($_POST['nombre_usuario'])&&!empty($_POST['contraseña'])){
                $nombre = $_POST['nombre_usuario'];
                $contraseña = $_POST['contraseña'];

                $user = $this->model->validar($nombre);

                if($user && password_verify($contraseña, ($user->contraseña))){
                    session_start();
                    $_SESSION["logueado"] = true;
                    $_SESSION["usuario"] = $nombre;
                    header('location: '.INICIO);
                }
                else{
                    echo '<h1>No tenes permisos de administrador!</h1>';
                }
            }
        }
    }


    function signOut(){
        session_start();
        session_destroy();
        header('location: '.INICIO);
    }
}

?>