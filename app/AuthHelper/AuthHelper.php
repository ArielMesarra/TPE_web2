<?php
class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["logueado"])){
            $_SESSION["logueado"]=false;
        }
        return $_SESSION["logueado"];    
    }

}

?>