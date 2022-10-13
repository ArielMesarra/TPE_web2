<?php
require_once './app/views/loginView.php';
require_once './app/models/loginModel.php';
class loginController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new loginModel();
        $this->view = new loginView();
    }

    function showLogin(){
        session_start();
        if(isset($_SESSION["logueado"]) && $_SESSION["logueado"]){
            echo '<h4>Ya estas logueado</h4>';
        }
        else{
            $this->view->showFormLogin();
            $this->model->validar($_POST);
        }
    }
}

?>