
<?php
require_once './app/views/staticView.php';

    class StaticController{
        private $view;

        function __construct(){
            $this->view = new StaticView();

        }
        function mostrarHeader(){
            $this->view->mostrarHeader();
        }

        function mostrarFooter(){
            $this->view->mostrarFooter();
        }

    }
    

?>