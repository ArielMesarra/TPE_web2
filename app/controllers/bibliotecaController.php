<?php
require_once './app/models/bibliotecaModel.php';
require_once './app/views/bibliotecaView.php';
require_once './app/AuthHelper/AuthHelper.php';
    class bibliotecaController{
        private $model;
        private $view;
        private $helper;

        function __construct(){
            $this->helper = new AuthHelper();
            $this->model = new bibliotecaModel();
            $this->view = new bibliotecaView();
        }

        function showBiblioteca(){
            session_start();
            $artistas=$this->model->getArtistas();
            $this->view->showArtistas($artistas, $this->helper->checkLoggedIn());

            $this->view->elegirArtista($artistas);

            if(!isset($_POST['opcionElegida']))  $_POST['opcionElegida']='*';
            
            $canciones=$this->model->getCancionesPorId($_POST['opcionElegida']);
            
            $this->view->showCanciones($canciones, $this->helper->checkLoggedIn());

            if ($this->helper->checkLoggedIn()){
                $this->view->mostrarMas();
            }
               
            
        }

    }
    

?>