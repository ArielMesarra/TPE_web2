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
            echo $_POST['nombre_usuario'];
            $this->model->registrar($_POST);
        }
    }

?>