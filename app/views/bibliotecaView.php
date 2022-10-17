<?php
require_once './libs/smarty/Smarty.class.php';

class bibliotecaView{
    function showArtistas($artistas, $sesion){
        $smarty = new Smarty();
        $smarty->assign('sesion', $sesion);
        $smarty->assign('artistas',$artistas);
        $smarty->display('templates/artistas.tpl'); 
    }

    function elegirArtista($artistas){
        $smarty = new Smarty();
        $smarty->assign('artistas', $artistas);
        $smarty->display('templates/elegir.tpl'); 
    }
    
    function showCanciones($canciones, $sesion){
        $smarty = new Smarty();
        $smarty->assign('sesion', $sesion);
        $smarty->assign('canciones',$canciones);
        $smarty->display('templates/canciones.tpl'); 
    }

    function mostrarMas(){
        $smarty = new Smarty();
        $smarty->display('templates/mostrarmas.tpl'); 
    
    }


    
}

?>