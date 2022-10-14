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
            $query = $this->db->prepare('SELECT a.nombre, a.lugar, a.integrantes_num, a.id_artistas FROM artistas AS a');
            $query->execute();
            $artistas = $query->fetchAll(PDO::FETCH_OBJ);
            return $artistas;
        }

        function borrarCategoria($artistaBorrar){
            $query = $this->db->prepare('DELETE FROM artistas WHERE nombre=?');
            $query->execute([$artistaBorrar]);

        }

        function borrarCancion($cancionBorrar){
            $query = $this->db->prepare('DELETE FROM canciones WHERE nombre=?');
            $query->execute([$cancionBorrar]);
        }

        function agregarCancion($cancion){
            $nombreCancion=$cancion['nombreAgregarCancion'];
            $descripcionCancion=$cancion['descripcionAgregarCancion'];
            $fechaCancion=$cancion['fechaAgregarCancion'];
            $artistaCancion=$cancion['artistaAgregarCancion'];
            $query = $this->db->prepare('INSERT INTO canciones(nombre, descripcion, fecha_estreno, fk_id_artistas) VALUES (?,?,?,?)');
            $query->execute([$nombreCancion, $descripcionCancion, $fechaCancion, $artistaCancion]);  
        }
        
        function agregarArtista($artista){
            var_dump($artista);
            $nombreArtista=$artista['nombreArtistaAgregar'];
            $lugarArtista=$artista['lugarArtistaAgregar'];
            $integrantesArtista=$artista['integrantesArtistaAgregar'];
            $query = $this->db->prepare('INSERT INTO artistas(nombre, lugar, integrantes_num) VALUES (?,?,?)');
            $query->execute([$nombreArtista, $lugarArtista, $integrantesArtista]);
        }
    }
?>