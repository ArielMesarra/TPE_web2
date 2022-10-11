<?php
require_once './libs/smarty/Smarty.class.php';
class View{
    
    function showItems($canciones){
        $smarty = new Smarty();
        $smarty->assign('canciones',$canciones);
        $smarty->display('templates/biblioteca.tpl'); 
    }
    function showRegister(){
        $smarty = new Smarty();
        $smarty->display('templates/register.tpl');
    }
    function showFormLogin(){
        $smarty = new smarty();
        $smarty->display('templates/login.tpl');
    }
}

?>