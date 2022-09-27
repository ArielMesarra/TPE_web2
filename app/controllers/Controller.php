<?php
require_once('./app/models/Model.php');
require_once('./app/views/View.php');
    class Controller{
        private $model;
        private $view;

        function __construct(){
            $this->model = new Model();
            $this->view = new View();
        }
        function show_biblioteca(){
            $canciones=$this->model->traer_datos();
            $this->view->mostrar_datos($canciones);
        }
    }

?>