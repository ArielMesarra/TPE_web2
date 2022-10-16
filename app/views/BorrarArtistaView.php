<?php
require_once './libs/smarty/Smarty.class.php';
class BorrarArtistaView{

    function confirmarBorrar($artistaBorrar){
        $smarty = new Smarty();
        $smarty->assign("artistas",$artistaBorrar);
        $smarty->display('templates/confirmarBorrar.tpl');
    }

}

?>