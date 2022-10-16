<?php
require_once './libs/smarty/Smarty.class.php';
class EditarArtistaView{

    function mostrar(){
            echo 'view';
        $smarty = new Smarty();
        // $smarty->assign("artistas",$artistaBorrar);
        $smarty->display('templates/editarArtista.tpl');
    }

}

?>
