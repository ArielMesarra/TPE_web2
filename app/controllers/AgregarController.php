<?php
require_once './app/models/AgregarModel.php';
require_once './app/models/bibliotecaModel.php';
require_once './app/views/EditarView.php';

    class AgregarController{
        private $model;
        private $view;

        function __construct(){
            $this->model = new AgregarModel();
            $this->view = new EditarView();
            $this->bibliotecaModel = new bibliotecaModel();

        }

        function artista(){
            $this->view->mostrarEditarArtista("","Agregar");
        }
        function confirmaAgregarArtista($datos){
            if (empty($datos['nombre'])||empty($datos['lugar'])||empty($datos['integrantes'])){
                echo 'hay campos vacios';
            }else{
                $yaExiste=$this->bibliotecaModel->yaExiste($datos['nombre']);
                if ($datos['nombre']==$yaExiste->nombre){
                    echo 'ya existe un artista llamado '.$datos['nombre'];
                }else{
                    
                $this->model->agregarArtista($datos);
                header('location: '.BIBLIOTECA);
                }
            }
        }


        function cancion(){
            $artistas=$this->bibliotecaModel->getArtistas();
            
            $this->view->mostrarEditarCancion("",$artistas,"Agregar");
            
            echo 'agregando cancion';
        }
        
        function confirmaAgregaCancion($datos){
            if (empty($datos['nombre'])||empty($datos['descripcion'])||empty($datos['fecha'])){
                echo 'hay campos vacios';
            }else{

                 $this->model->agregarCancion($datos);
                header('location: '.BIBLIOTECA);
            }
        }

    }
    

?>