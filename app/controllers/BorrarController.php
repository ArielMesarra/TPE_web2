<?php
require_once './app/models/BorrarArtistaModel.php';
require_once './app/views/BorrarArtistaView.php';
require_once './app/models/bibliotecaModel.php';

class BorrarController{
    private $model;
    private $view;

    function __construct()
    {
        $this->model= new BorrarArtistaModel();
        $this->view= new BorrarArtistaView();
        $this->bibliotecaModel = new bibliotecaModel();

    }

    function borrarArtista($id){
        $id=(int)$id;
        $canciones=$this->bibliotecaModel->getCancionesPorId($id);
        $this->view->confirmarBorrar($id,$canciones);

    }
    function borrarCancion($idCancion){
        $this->model->borrarCancion($idCancion);
        header('location: '.BIBLIOTECA);

    }
    function confirmarBorrarArtista($flag,$id){
        if ($flag=="true"){
            $this->model->borrarArtista($id);
        }
        header('location: '.BIBLIOTECA);
    }


}

?>