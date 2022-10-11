<?php
require_once './app/models/Model.php';
require_once './app/views/View.php';
    class Controller{
        private $model;
        private $view;

        function __construct(){
            $this->model = new Model();
            $this->view = new View();
        }

        function showBiblioteca(){
            session_start();
            if($_SESSION["logueado"]){
                $artistas=$this->model->getArtistas();
                $canciones=$this->model->getCanciones();
                $this->view->showBiblioteca($canciones, $artistas);

            }
            else{
                echo '<h4>No estas logueado</h4>';
            }
        }

        function showRegister(){
            $this->view->showRegister();
            echo $_POST['nombre_usuario'];
            $this->model->registrar($_POST);
        }

        function showLogin(){
            session_start();
            if(isset($_SESSION["logueado"]) && $_SESSION["logueado"]){
                echo '<h4>Ya estas logueado</h4>';
            }
            else{
                $this->view->showFormLogin();
                $this->model->validar($_POST);
            }
        }

        function signOut(){
            session_start();
            session_destroy();
        }
    }

?>