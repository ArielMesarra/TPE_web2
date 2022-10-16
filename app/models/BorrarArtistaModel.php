<?php

class BorrarArtistaModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');

    }
    function borrarCategoria($artistaBorrar){
        echo '<h1>ENTRASTE AL MODEL</h1>';
        $id=$artistaBorrar;
        var_dump($id);
        $id = (int)$id;
        var_dump($id);
        $query = $this->db->prepare('DELETE FROM artistas WHERE id_artistas=?');
        $query->execute([$id]);
    }

}

?>