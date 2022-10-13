<?php
require_once './libs/smarty/Smarty.class.php';

class loginView{
    function showFormLogin(){
        $smarty = new smarty();
        $smarty->display('templates/login.tpl');
    }
}


?>