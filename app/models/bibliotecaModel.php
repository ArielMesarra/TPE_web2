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
                $query=$this->db->prepare('SELECT c.*,a.nombre AS nombreDeArtista FROM canciones AS c INNER JOIN artistas AS a ON c.fk_id_artistas = a.id_artistas WHERE a.nombre=?');
                $query->execute([$artista]);
            }
            $canciones = $query->fetchAll(PDO::FETCH_OBJ);
            return $canciones;
        }
        
        function getCancionesPorId($id){
            if($id == "*"){
                $query=$this->db->prepare('SELECT c.*,a.nombre AS nombreDeArtista FROM canciones AS c INNER JOIN artistas AS a ON c.fk_id_artistas = a.id_artistas');
                $query->execute();
            }
            else{

    
                $query=$this->db->prepare('SELECT c.*,a.nombre as nombreDeArtista FROM canciones AS c INNER JOIN artistas AS a ON c.fk_id_artistas = a.id_artistas WHERE fk_id_artistas=?');
                $query->execute([$id]);
            }      
                
            $canciones = $query->fetchAll(PDO::FETCH_OBJ);
            return $canciones;
        }

        function getCancion($id){
            
            $query=$this->db->prepare('SELECT c.*,a.nombre as nombreDeArtista FROM canciones AS c INNER JOIN artistas AS a ON c.fk_id_artistas = a.id_artistas WHERE id_canciones=?');
            $query->execute([$id]);
            $canciones = $query->fetch(PDO::FETCH_OBJ);
            return $canciones;
        }

        
        function getArtistas(){
            $query = $this->db->prepare('SELECT a.nombre, a.lugar, a.integrantes_num, a.id_artistas FROM artistas AS a');
            $query->execute();
            $artistas = $query->fetchAll(PDO::FETCH_OBJ);
            return $artistas;
        }

        

        function getArtista($id){
            $query = $this->db->prepare('SELECT a.* FROM artistas AS a WHERE id_artistas=?');
            $query->execute([$id]);
            $artista = $query->fetch(PDO::FETCH_OBJ);
            return $artista;
        }

        function yaExiste($nombre){
            $query = $this->db->prepare('SELECT a.nombre FROM artistas AS a WHERE nombre=?');
            $query->execute([$nombre]);
            $artista = $query->fetch(PDO::FETCH_OBJ);
            return $artista;




        }


    } 
?>  