<?php
require_once './app/views/EditarArtistaView.php';
    class EditarArtistaController{
        // private $model;
        private $view;

        function __construct(){
            $this->view = new EditarArtistaView();
        }

        function editarArtista(){
            echo 'edotarartista controller';
            $this->view->mostrar();
        }

    }
    

?>