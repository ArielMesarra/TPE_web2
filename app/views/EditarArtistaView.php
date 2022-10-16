<?php
require_once './libs/smarty/Smarty.class.php';
class EditarArtistaView{

    function mostrarEditarArtista(){
            echo 'view';
        $smarty = new Smarty();
        // $smarty->assign("artistas",$artistaBorrar);
        $smarty->display('templates/editarArtista.tpl');
    }

    function mostrarEditarCancion(){
        echo 'view cancion';
    $smarty = new Smarty();
    // $smarty->assign("artistas",$artistaBorrar);
    $smarty->display('templates/editarCancion.tpl');
}

}

?>
