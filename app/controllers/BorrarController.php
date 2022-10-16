<?php
require_once './app/models/BorrarArtistaModel.php';
require_once './app/views/BorrarArtistaView.php';

class BorrarController{
    private $model;
    private $view;

    function __construct()
    {
        $this->model= new BorrarArtistaModel();
        $this->view= new BorrarArtistaView();
    }

    function borrarArtista($idArtista){
        echo 'entro';
        $this->view->confirmarBorrar($idArtista);

        // var_dump($_POST);
        if(isset($_POST['confirm'])){
            echo 'entraste aca';
            if($_POST['confirm'] == 'true'){
                var_dump($_POST['confirm']);
                echo '<h1>'.$artistaBorrar.'</h1>';
                $this->model->borrarCategoria($_POST['artista']);
            }
            header('location: '.BIBLIOTECA);
        }

    }
    function borrarCancion($idCancion){
        // echo 'entro'.$idCancion;
        // $this->view->confirmarBorrar($idArtista);

        // // var_dump($_POST);
        // if(isset($_POST['confirm'])){
        //     echo 'entraste aca';
        //     if($_POST['confirm'] == 'true'){
        //         var_dump($_POST['confirm']);
        //         echo '<h1>'.$artistaBorrar.'</h1>';
                $this->model->borrarCancion($idCancion);
        //     }
            header('location: '.BIBLIOTECA);
        // }

    }


}

?>