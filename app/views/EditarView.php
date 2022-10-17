<?php
require_once './libs/smarty/Smarty.class.php';
class EditarView{
    //modo puede ser editar o agregar
    function mostrarEditarArtista($artista,$modo){
        $smarty = new Smarty();
        $smarty->assign("artista",$artista);
        $smarty->assign("modo",$modo);
        $smarty->display('templates/editarArtista.tpl');
    }

    function mostrarEditarCancion($cancion,$artistas,$modo){
        $smarty = new Smarty();
        $smarty->assign("cancion",$cancion);
        $smarty->assign("artistas",$artistas);
        $smarty->assign("modo",$modo);
        $smarty->display('templates/editarCancion.tpl');
    }

}

?>
