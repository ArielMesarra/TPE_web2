<?php
require_once './libs/smarty/Smarty.class.php';

    class StaticView{
        function showHeader(){
            $smarty = new Smarty();
            $smarty->assign('BASE_URL', BASE_URL);
            $smarty->display('templates/header.tpl');
        }
        
        function showFooter(){
            $smarty = new Smarty();
            $smarty->display('templates/footer.tpl');
        }
    }

?>