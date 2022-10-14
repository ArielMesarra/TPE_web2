<?php
require_once './app/views/registerView.php';
require_once './app/models/registerModel.php';
    class registerController{
        private $model;
        private $view;

        function __construct(){
            $this->model = new registerModel();
            $this->view = new registerView();
        }

        function showRegister(){
            $this->view->showRegister();
            if(!empty($_POST['nombre_usuario'])&&!empty($_POST['email'])&&!empty($_POST['contraseña'])){
                $nombre = $_POST['nombre_usuario'];
                $email = $_POST['email'];
                $contraseña = $_POST['contraseña'];
                $contraseña = password_hash($contraseña, PASSWORD_BCRYPT);
                $this->model->registrar($nombre,$email,$contraseña);
                echo '<h2>Te registraste correctamente</h2>';
            }
            else{
                echo '<h2>Todos los campos deben estar completos!</h2>';
            }
            
        }
    }

?>