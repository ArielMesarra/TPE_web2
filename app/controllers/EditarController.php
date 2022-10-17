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
            
            $this->view->mostrarEditarArtista($artista,"Editar");
        }

        function editarArtistaProceder($id){
            if (empty($_POST['nombre'])||empty($_POST['lugar'])||empty($_POST['integrantes'])){
                echo 'hay campos vacios';
            }else{

                $this->editarModel->editarArtista($id,$_POST);
                header('location: '.BIBLIOTECA);
            }


        }
        function editarCancion($id){
            $id=(int)$id;
            $cancion=$this->bibliotecaModel->getCancion($id);
            $artistas=$this->bibliotecaModel->getArtistas();
            $this->view->mostrarEditarCancion($cancion,$artistas,"Editar");
        }

        function confirmaEditarCancion($id,$datos){
            if (empty($datos['nombre'])||empty($datos['descripcion'])||empty($datos['fecha'])){
                echo 'hay campos vacios';
            }else{
                $this->editarModel->editarCancion($id,$_POST);
                header('location: '.BIBLIOTECA);
            }
        }

    }
    

?>