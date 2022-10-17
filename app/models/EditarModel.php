<?php
    class EditarModel{

        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }

        function editarCancion($datos){
            // var_dump($datos);
            $id=$datos['id'];
            $nombre = $datos['nombre'];
            $descripcion = $datos['descripcion'];
            $fecha = $datos['fecha'];
            $idArtista = (int)$datos['artista'];
            $query = $this->db->prepare('UPDATE canciones SET nombre=? ,descripcion=? ,fecha_estreno=?, fk_id_artistas=? WHERE id_canciones=?');
            echo '-----';
            // echo $idArtista.' id artsi';
            echo $id.' id';
            
            $query->execute([$nombre,$descripcion,$fecha,$idArtista, $id]);
        }
    } 
?>  