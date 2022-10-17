<?php
require_once './libs/smarty/Smarty.class.php';
class EditarView{
    //modo puede ser editar o agregar
    function mostrarEditarArtista($artista,$modo){
            // echo 'view';
            var_dump($artista);
        $smarty = new Smarty();
        $smarty->assign("artista",$artista);
        $smarty->assign("modo",$modo);

        $smarty->display('templates/editarArtista.tpl');
    }

    function mostrarEditarCancion($cancion,$artistas,$modo){
        // echo 'view cancion';
    $smarty = new Smarty();
    $smarty->assign("cancion",$cancion);
    $smarty->assign("artistas",$artistas);
    $smarty->assign("modo",$modo);


    $smarty->display('templates/editarCancion.tpl');
}

}

?>
