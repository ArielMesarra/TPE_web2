<?php
    class Model{
        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }

        function getItems(){
            $query = $this->db->prepare('SELECT c.nombre, c.descripcion, c.fecha_estreno, c.fk_id_artistas FROM canciones AS c');
            $query->execute();
            $canciones = $query->fetchAll(PDO::FETCH_OBJ);
            return $canciones;
        }

    }
?>