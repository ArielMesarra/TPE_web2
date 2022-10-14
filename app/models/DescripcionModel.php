<?php

    class DescripcionModel{
        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }
        function traerInfo($id){
            $query=$this->db->prepare('SELECT * FROM canciones WHERE id_canciones=?');
            $query->execute([$id]);
            $cancion = $query->fetch(PDO::FETCH_OBJ);
            return $cancion;

        }

    }

?>