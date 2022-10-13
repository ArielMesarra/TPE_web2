<?php
require_once './libs/smarty/Smarty.class.php';

class registerView{
    function showRegister(){
        $smarty = new Smarty();
        $smarty->display('templates/register.tpl');
    }
}

?>