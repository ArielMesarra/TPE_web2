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
            $artistas=$this->model->getArtistas();
            if(!isset($_POST['artista'])){
                $_POST['artista']='*';
            }
            $this->view->showArtistas($artistas);
            $canciones=$this->model->getCanciones($_POST['artista']);
            $this->view->showCanciones($canciones);
            if($_SESSION["logueado"]){
                // $this->view->borrarArtista($artistas);
                // if(!empty($_POST['artistaSelec'])){
                    //     $artistaBorrar=$_POST['artistaSelec'];
                    //     $this->model->borrarCategoria($artistaBorrar);
                    // var_dump(INICIO);
                    // header('location: '.INICIO);
                    // }
                    // $this->view->borrarCancion($canciones);
                    // if(!empty($_POST['cancionSelec'])){
                        //     $cancionBorrar=$_POST['cancionSelec'];
                        //     $this->model->borrarCancion($cancionBorrar);
                        // }
                
                $this->view->mostrarOpciones();
                $opcion="";
                if(!empty($_POST['opcionElegida']))
                $opcion=$_POST['opcionElegida'];
                switch($opcion){
                    case 'borrarA':
                        $this->view->borrarArtista($artistas);
                        if(!empty($_POST['artistaSelec'])){
                            $artistaBorrar=$_POST['artistaSelec'];
                            $this->model->borrarCategoria($artistaBorrar);

                        }
                    break;
                    case 'borrarC':
                        $this->view->borrarCancion($canciones);
                        if(!empty($_POST['cancionSelec'])){
                            $cancionBorrar=$_POST['cancionSelec'];
                            $this->model->borrarCancion($cancionBorrar);
                        }
                    break;
                    case 'editarA':
                        echo '<h2>Anda el editar Artistas</h2>';
                    break;
                    case 'editarC':

                    break;
                    case 'agregarA':
                            
                            
                    break;
                    case 'agregarC':
                        $_POST=[];                       
                        $this->view->agregarCancion($artistas);
                        // $_POST['nombre'] = 'ariel';
                        var_dump($_POST);
                        // if(!empty($_POST['nombreAgregarCancion'])){&&!empty($_POST['descripcion'])&&!empty($_POST['fecha'])&&!empty($_POST['artista'])){
                            $this->model->agregarCancion($_POST);
                        // }
                    break;
                    case 'agregarA':

                    break;
                    default:
                        // var_dump($_POST);
                        echo 'aca esta el problema';
                }
                
            }
        }

    }

?>