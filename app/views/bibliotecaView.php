<?php
require_once './libs/smarty/Smarty.class.php';

class bibliotecaView{
    function showArtistas($artistas){
        $smarty = new Smarty();
        $smarty->assign('artistas',$artistas);
        $smarty->display('templates/artistas.tpl'); 
    }
    
    function showCanciones($canciones){
        $smarty = new Smarty();
        $smarty->assign('canciones',$canciones);
        $smarty->display('templates/canciones.tpl'); 
    }
    
}

?>