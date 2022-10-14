<?php
require_once './libs/smarty/Smarty.class.php';
    class DescripcionView{
        function showInfo($cancion){
            $smarty = new Smarty();
            $smarty->assign('cancion', $cancion);
            $smarty->display('templates/descripcion.tpl');
        }
    }

?>