<?php
require_once './libs/smarty/Smarty.class.php';

    class StaticView{
        function mostrarHeader(){
            $smarty = new Smarty();
            $smarty->assign('BASE_URL', BASE_URL);
            $smarty->display('templates/header.tpl');
        }
        
        function mostrarFooter(){
            $smarty = new Smarty();
            $smarty->display('templates/footer.tpl');
        }
    }

?>