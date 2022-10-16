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
            if(!isset($_POST['artista'])){
                $_POST['artista']='*';
            }
            
            $this->view->showArtistas($artistas, $this->helper->checkLoggedIn());
            $canciones=$this->model->getCanciones($_POST['artista']);
            $this->view->showCanciones($canciones, $this->helper->checkLoggedIn());

            // if($_SESSION["logueado"]){
            //     $this->view->borrarArtista($artistas);
            //     if(!empty($_POST['artistaSelec'])){
            //             $artistaBorrar=$_POST['artistaSelec'];
            //             $this->model->borrarCategoria($artistaBorrar);
            //         var_dump(INICIO);
            //         header('location: '.INICIO);
            //         }



                // $this->view->borrarCancion($canciones);
                // if(!empty($_POST['cancionSelec'])){
                //     $cancionBorrar=$_POST['cancionSelec'];
                //     $this->model->borrarCancion($cancionBorrar);
                //     header('location: '.INICIO);
                // }


                // $this->view->agregarCancion($artistas);
                // if(!empty($_POST['nombreAgregarCancion'])&&!empty($_POST['descripcionAgregarCancion'])&&!empty($_POST['fechaAgregarCancion'])&&!empty($_POST['artistaAgregarCancion'])){
                //     $this->model->agregarCancion($_POST);
                // }


                // //Aca agregamos un artista
                // $this->view->agregarArtista('Agregar');
                // if(!empty($_POST['nombreArtistaAgregar'])&&!empty($_POST['lugarArtistaAgregar'])&&!empty($_POST['integrantesArtistaAgregar'])){
                //     $this->model->agregarArtista($_POST);
                // }


                // //Aca editamos un artista
                // $this->view->editarArtista($artistas);
                // if(!empty($_POST['artistaId']) && !empty($_POST['nombreArtistaEditar'])&&!empty($_POST['lugarArtistaEditar'])&&!empty($_POST['integrantesArtistaEditar'])){
                //     $this->model->editarArtista($_POST);
                // }


                // //aca editamos una cancion
                // $this->view->editarCancion($canciones, $artistas);
                // if(!empty($_POST['nombreCancionEditar'])&&!empty($_POST['descripcionCancionEditar'])&&!empty($_POST['fechaCancionEditar'])&&!empty($_POST['artistaIdEditarC'])&&!empty($_POST['cancionId'])){
                //     $this->model->editarCancion($_POST);
                // }

                    
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
    

?>