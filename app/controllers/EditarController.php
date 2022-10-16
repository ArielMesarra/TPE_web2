<?php
// require_once './app/views/DescripcionView.php';

require_once './app/views/EditView.php';
// require_once './app/models/EditarModel.php';
    class EditarController{
        // private $model;
        private $view;
        // private $helper;

        function __construct(){
            // $this->helper = new AuthHelper();
            // $this->model = new EditarModel();
            $this->view = new EditView();
            // $this->view = new DescripcionView();
            
        }

        function editarCancion(){
            echo 'aqui entrando controller';
            this->view->mostrar();
          
                 echo 'saliendo del controller';
            
        }

    }
    

?>