<?php
require_once './app/views/EditarArtistaView.php';
    class EditarController{
        // private $model;
        private $view;

        function __construct(){
            $this->view = new EditarArtistaView();
        }

        function editarArtista(){
            echo 'edotarartista controller';
            $this->view->mostrarEditarArtista();
        }
        function editarCancion(){
            echo 'edotar cancion controller';
            $this->view->mostrarEditarCancion();
        }

    }
    

?>