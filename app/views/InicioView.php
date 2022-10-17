<?php
require_once './libs/smarty/Smarty.class.php';

class InicioView{
    function mostrar(){
        $smarty = new smarty();
        $smarty->display('templates/inicio.tpl');
    }
}


?>