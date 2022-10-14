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
                $this->view->borrarArtista($artistas);
                if(!empty($_POST['artistaSelec'])){
                        $artistaBorrar=$_POST['artistaSelec'];
                        $this->model->borrarCategoria($artistaBorrar);
                    var_dump(INICIO);
                    header('location: '.INICIO);
                    }
                $this->view->borrarCancion($canciones);
                if(!empty($_POST['cancionSelec'])){
                    $cancionBorrar=$_POST['cancionSelec'];
                    $this->model->borrarCancion($cancionBorrar);
                }
                $this->view->agregarCancion($artistas);
                if(!empty($_POST['nombreAgregarCancion'])&&!empty($_POST['descripcionAgregarCancion'])&&!empty($_POST['fechaAgregarCancion'])&&!empty($_POST['artistaAgregarCancion'])){
                    $this->model->agregarCancion($_POST);
                }
                $this->view->agregarArtista();
                if(!empty($_POST['nombreArtistaAgregar'])&&!empty($_POST['lugarArtistaAgregar'])&&!empty($_POST['integrantesArtistaAgregar'])){
                    $this->model->agregarArtista($_POST);
                }

                    
                // $this->view->mostrarOpciones();
                // if(!empty($_POST['opcionElegida'])){
                //     $opcion=$_POST['opcionElegida'];
                
                // switch($opcion){
                //     case 'borrarA':
                //         $this->view->borrarArtista($artistas);
                //         if(!empty($_POST['artistaSelec'])){
                //             $artistaBorrar=$_POST['artistaSelec'];
                //             $this->model->borrarCategoria($artistaBorrar);

                //         }
                //     break;
                //     case 'borrarC':
                //         $this->view->borrarCancion($canciones);
                //         if(!empty($_POST['cancionSelec'])){
                //             $cancionBorrar=$_POST['cancionSelec'];
                //             $this->model->borrarCancion($cancionBorrar);
                //         }
                //     break;
                //     case 'editarA':
                //         echo '<h2>Anda el editar Artistas</h2>';
                //     break;
                //     case 'editarC':

                //     break;
                //     case 'agregarA':
                            
                            
                //     break;
                //     case 'agregarC':
                                              
                //         $this->view->agregarCancion($artistas);
                //         // $_POST['nombre'] = 'ariel';
                //         var_dump($_POST);
                //         // if(!empty($_POST['nombreAgregarCancion'])){&&!empty($_POST['descripcion'])&&!empty($_POST['fecha'])&&!empty($_POST['artista'])){
                //             $this->model->agregarCancion($_POST);
                //         // }
                //     break;
                //     case 'agregarA':

                //     break;
                //     default:
                //         // var_dump($_POST);
                //         if(!empty($_POST['nombreAgregarCancion']))
                //         echo $_POST['nombreAgregarCancion'];

                // }
                
            }
        }

    }

?>