<?php
require_once './libs/smarty/Smarty.class.php';
class EditarView{

    function mostrarEditarArtista(){
            echo 'view';
        $smarty = new Smarty();
        // $smarty->assign("artistas",$artistaBorrar);
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
