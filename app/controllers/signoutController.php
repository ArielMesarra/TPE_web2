<?php

class signoutController{
    
    function signOut(){
        session_start();
        session_destroy();
        header('location: '.INICIO);
    }

}
?>