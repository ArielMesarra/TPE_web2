<?php
class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        if(!isset($_SESSION["logueado"])){
            $_SESSION["logueado"]=false;
        }
        return $_SESSION["logueado"];          
        
    }

    function yaEstas(){
        echo '<h2>Ya estas logueado</h2>';

    }

}

?>