<?php
require_once './app/views/EditarView.php';
require_once './app/models/bibliotecaModel.php';
require_once './app/models/EditarModel.php';

    class EditarController{
        private $bibliotecaModel;
        private $view;
        // private $editarModel;

        function __construct(){
            $this->view = new EditarView();
            $this->bibliotecaModel = new bibliotecaModel();
            $this->editarModel=new EditarModel();

        }

        function editarArtista($id){

            $artista=$this->bibliotecaModel->getArtista($id);
            
            $this->view->mostrarEditarArtista($artista);
        }

        function editarArtistaProceder($id){
            echo $id;
            // var_dump($_POST);
            $this->editarModel->editarArtista($id,$_POST);
            header('location: '.BIBLIOTECA);



        }
        function editarCancion($id){
            // var_dump($id);
            $id=(int)$id;
            $cancion=$this->bibliotecaModel->getCancion($id);
            $artistas=$this->bibliotecaModel->getArtistas();
            echo 'edotar cancion controller';
            // var_dump($cancion);
            $this->view->mostrarEditarCancion($cancion,$artistas);
            // var_dump($_POST);
            if (!empty($_POST['nombre'])&& !empty($_POST['descripcion'])){
                echo 'editando......';
                // var_dump($_POST);

                $this->editarModel->editarCancion($_POST);
            header('location: '.BIBLIOTECA);

            }
            
            
        }

    }
    

?>