<?php
require_once './app/models/bibliotecaModel.php';
require_once './app/views/bibliotecaView.php';
    class bibliotecaController{
        private $model;
        private $view;

        function __construct(){
            $this->model = new bibliotecaModel();
            $this->view = new bibliotecaView();
        }

        function showBiblioteca(){
            session_start();
            if($_SESSION["logueado"]){
                $artistas=$this->model->getArtistas();
                if(!isset($_POST['artista'])){
                    $_POST['artista']='*';
                }
                $this->view->showArtistas($artistas);
                $canciones=$this->model->getCanciones($_POST['artista']);
                $this->view->showCanciones($canciones);
            }
            else{
                echo '<h4>No estas logueado</h4>';
            }
        }

    }

?>