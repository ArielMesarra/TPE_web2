<?php
require_once './libs/smarty/Smarty.class.php';
class View{
    
    function showItems($canciones){
        $smarty = new Smarty();
        $smarty->assign('canciones',$canciones);
        $smarty->display('templates/biblioteca.tpl'); 
    }
}

?>