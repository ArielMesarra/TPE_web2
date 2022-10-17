<?php
require_once './app/views/registerView.php';
require_once './app/models/registerModel.php';
require_once './app/AuthHelper/AuthHelper.php';

    class registerController{
        private $model;
        private $view;
        private $helper;


        function __construct(){
            $this->model = new registerModel();
            $this->view = new registerView();
            $this->helper = new AuthHelper();

        }

        function showRegister(){
            if ($this->helper->checkLoggedIn()){
                $this->helper->yaEstas();
            }else{

                $this->view->showRegister();
                if(!empty($_POST['nombre_usuario'])&&!empty($_POST['email'])&&!empty($_POST['contraseña'])){
                    $nombre = $_POST['nombre_usuario'];
                    $email = $_POST['email'];
                    $contraseña = $_POST['contraseña'];
                    $contraseña = password_hash($contraseña, PASSWORD_BCRYPT);
                    $this->model->registrar($nombre,$email,$contraseña);
                    // echo '<h2>Te registraste correctamente</h2>';
                    header('location: '.INICIO);

                }
                else{
                    echo '<h2>Todos los campos deben estar completos!</h2>';
                }
            }    
        }
    }

?>