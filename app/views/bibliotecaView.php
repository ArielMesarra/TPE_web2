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

    function mostrarOpciones(){
        $smarty = new Smarty();
        $smarty->display('templates/mostrarOpciones.tpl');
    }

    function borrarArtista($artistas){
        $smarty = new Smarty();
        $smarty->assign('artistas',$artistas);
        $smarty->display('templates/borrarArtista.tpl');
    }

    function borrarCancion($canciones){
        $smarty = new Smarty();
        $smarty->assign('canciones', $canciones);
        $smarty->display('templates/borrarCancion.tpl');
    }


    function agregarCancion($artistas){
        $smarty = new Smarty();
        $smarty->assign('artistas',$artistas);
        $smarty->display('templates/agregarCancion.tpl');
    }

    function agregarArtista($titulo){
        $smarty = new Smarty();
        $smarty->assign('titulo',$titulo);
        $smarty->display('templates/agregarArtista.tpl');
    }

    function editarArtista($artistas){
        $smarty = new Smarty();
        $smarty->assign('artistas', $artistas);
        $smarty->display('templates/editarArtista.tpl');
    }

    function editarCancion($canciones, $artistas){
        $smarty = new Smarty();
        $smarty->assign('canciones', $canciones);
        $smarty->assign('artistas', $artistas);
        $smarty->display('templates/editarCancion.tpl');
    }

    
}

?>