<?php
    class bibliotecaModel{

        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }
        
        function getCanciones($artista){
            if($artista == "*"){
                $query=$this->db->prepare('SELECT c.*,a.nombre AS nombreDeArtista FROM canciones AS c INNER JOIN artistas AS a ON c.fk_id_artistas = a.id_artistas');
                $query->execute();
            }
            else{
                // $query = $this->db->prepare('SELECT c.nombre, c.descripcion, c.fecha_estreno, c.fk_id_artistas FROM canciones AS c');
                $query=$this->db->prepare('SELECT c.*,a.nombre AS nombreDeArtista FROM canciones AS c INNER JOIN artistas AS a ON c.fk_id_artistas = a.id_artistas WHERE a.nombre=?');
                $query->execute([$artista]);
            }
            $canciones = $query->fetchAll(PDO::FETCH_OBJ);
            return $canciones;
        }
        
        function getArtistas(){
            // $query = $this->db->prepare('SELECT c.nombre, c.descripcion, c.fecha_estreno, c.fk_id_artistas FROM canciones AS c');
            $query = $this->db->prepare('SELECT a.nombre, a.lugar, a.integrantes_num FROM artistas AS a');
            $query->execute();
            $artistas = $query->fetchAll(PDO::FETCH_OBJ);
            return $artistas;
        }

        function borrarCategoria($artistaBorrar){
            $query = $this->db->prepare('DELETE FROM artistas WHERE nombre=?');
            //$query->execute([$artistaBorrar]);

        }

        function borrarCancion($cancionBorrar){
            $query = $this->db->prepare('DELETE FROM canciones WHERE nombre=?');
            $query->execute([$cancionBorrar]);
        }

        function agregarCancion($cancion){
            echo $cancion['nombreAgregarCancion'];
            echo $cancion['descripcionAgregarCancion'];
            echo $cancion['fechaAgregarCancion'];
            echo $cancion['artistaAgregarCancion'];
            echo 'llegamos al model';
            
        }
    }
?>