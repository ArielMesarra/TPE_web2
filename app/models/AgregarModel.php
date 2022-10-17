<?php
    class AgregarModel{

        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }
        
        
        function agregarArtista($artista){
            // echo 'entro';
            var_dump($artista);
            $nombre=$artista['nombre'];
            $lugar=$artista['lugar'];
            $integrantes=(int)$artista['integrantes'];
            $query = $this->db->prepare('INSERT INTO artistas(nombre, lugar, integrantes_num) VALUES (?,?,?)');
            $query->execute([$nombre, $lugar, $integrantes]);
            // echo '<h1>Ento en el agregar MODEL</h1>';
        }


        function agregarCancion($cancion){
            $nombre=$cancion['nombre'];
            $descripcion=$cancion['descripcion'];
            $fecha=$cancion['fecha'];
            $artista=$cancion['artista'];
            $query = $this->db->prepare('INSERT INTO canciones(nombre, descripcion, fecha_estreno, fk_id_artistas) VALUES (?,?,?,?)');
            $query->execute([$nombre, $descripcion, $fecha, $artista]);  
        }
        
 } 
?>  