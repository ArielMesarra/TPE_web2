<?php
require_once './app/models/AgregarModel.php';
require_once './app/models/bibliotecaModel.php';

// require_once './app/views/bibliotecaView.php';
// require_once './app/AuthHelper/AuthHelper.php';
require_once './app/views/EditarView.php';

    class AgregarController{
        private $model;
        private $view;
        // private $helper;

        function __construct(){
            // $this->helper = new AuthHelper();
            $this->model = new AgregarModel();
            $this->view = new EditarView();
            $this->bibliotecaModel = new bibliotecaModel();

        }

        function artista(){
            echo 'agregando cancion';
            $this->view->mostrarEditarArtista("","Agregar");
        }
        function confirmaAgregarArtista($datos){
            $this->model->agregarArtista($datos);
            // var_dump($datos);
            header('location: '.BIBLIOTECA);

        }


        function cancion(){
            $artistas=$this->bibliotecaModel->getArtistas();
            
            $this->view->mostrarEditarCancion("",$artistas,"Agregar");
            
            echo 'agregando cancion';
        }
        
        function confirmaAgregaCancion($datos){
            echo 'cong agreg can';
            $this->model->agregarCancion($datos);
            // var_dump($datos);
            header('location: '.BIBLIOTECA);

        }

    }
    

?>