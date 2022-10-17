
<?php
require_once './app/views/InicioView.php';

    class InicioController{
        private $view;

        function __construct(){
            $this->view = new InicioView();

        }
        function mostrar(){
            $this->view->mostrar();
        }

    }
    

?>