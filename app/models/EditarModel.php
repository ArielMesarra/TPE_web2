<?php
    class EditarModel{

        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }

        function editarArtista($id,$datos){
            $nombre=$datos['nombre'];
            $lugar=$datos['lugar'];
            $integrantes=$datos['integrantes'];
            
            // $query = $this->db->prepare('UPDATE nombre'.'SET nombre=? WHERE id_artistas=?');
            $query = $this->db->prepare('UPDATE artistas SET nombre_artistas=? ,lugar=? ,integrantes_num=? WHERE id_artistas=? ');
            $query->execute([$nombre, $lugar, $integrantes, $id]);
            // echo '<h1>Ento en el editar MODEL</h1>';
        }

        function editarCancion($id,$datos){
            $nombre = $datos['nombre'];
            $descripcion = $datos['descripcion'];
            $fecha = $datos['fecha'];
            $idArtista = (int)$datos['artista'];
            $query = $this->db->prepare('UPDATE canciones SET nombre_canciones=? ,descripcion=? ,fecha_estreno=?, fk_id_artistas=? WHERE id_canciones=?');
            $query->execute([$nombre,$descripcion,$fecha,$idArtista, $id]);
        }
    } 
?>  