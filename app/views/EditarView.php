<?php
require_once './libs/smarty/Smarty.class.php';
class EditarView{

    function mostrarEditarArtista($artista){
            // echo 'view';
            var_dump($artista);
        $smarty = new Smarty();
        $smarty->assign("artista",$artista);
        $smarty->display('templates/editarArtista.tpl');
    }

    function mostrarEditarCancion($cancion,$artistas){
        // echo 'view cancion';
    $smarty = new Smarty();
    $smarty->assign("cancion",$cancion);
    $smarty->assign("artistas",$artistas);

    $smarty->display('templates/editarCancion.tpl');
}

}

?>
