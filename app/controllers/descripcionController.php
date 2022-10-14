<?php
require_once './app/models/DescripcionModel.php';
require_once './app/views/DescripcionView.php';
    class DescripcionController{
        private $model;
        private $view;
        function __construct()
        {
            $this->view = new DescripcionView();
            $this->model = new DescripcionModel();
        }
        function showDescripcion($id){
            $cancion=$this->model->traerInfo($id);
            $this->view->showInfo($cancion);
        }
    }

?>