<?php
require_once './libs/smarty/Smarty.class.php';
class BorrarArtistaView{

    function confirmarBorrar($id,$canciones){
        $smarty = new Smarty();
        $smarty->assign("id",$id);
        $smarty->assign("canciones",$canciones);

        $smarty->display('templates/confirmarBorrar.tpl');
    }

}

?>