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

            $query=$this->db->prepare('SELECT c.* FROM canciones AS c WHERE id_canciones=?');
            $query->execute([$id]);
            $cancion = $query->fetch(PDO::FETCH_OBJ);
            return $cancion;
            // echo 'entro'.$id;
            // echo '-----';
        }
        
        
        function getArtistas(){
            // $query = $this->db->prepare('SELECT c.nombre, c.descripcion, c.fecha_estreno, c.fk_id_artistas FROM canciones AS c');
            $query = $this->db->prepare('SELECT a.nombre, a.lugar, a.integrantes_num, a.id_artistas FROM artistas AS a');
            $query->execute();
            $artistas = $query->fetchAll(PDO::FETCH_OBJ);
            return $artistas;
        }

        

        // function borrarCancion($cancionBorrar){
        //     $query = $this->db->prepare('DELETE FROM canciones WHERE nombre=?');
        //     $query->execute([$cancionBorrar]);
        // }

        function agregarArtista($artista){
            var_dump($artista);
            $nombreArtista=$artista['nombreArtistaAgregar'];
            $lugarArtista=$artista['lugarArtistaAgregar'];
            $integrantesArtista=$artista['integrantesArtistaAgregar'];
            $query = $this->db->prepare('INSERT INTO artistas(nombre, lugar, integrantes_num) VALUES (?,?,?)');
            $query->execute([$nombreArtista, $lugarArtista, $integrantesArtista]);
            echo '<h1>Ento en el agregar MODEL</h1>';
        }

        function getArtista($id){
            echo 'entro model';
            echo $id;
            $query = $this->db->prepare('SELECT a.* FROM artistas AS a WHERE id_artistas=?');
            $query->execute([$id]);
            $artista = $query->fetch(PDO::FETCH_OBJ);
        //    $artista="hol";
            return $artista;
        }

       

        function editarCancion($datos){
            $nombre = $datos['nombreCancionEditar'];
            $idCancion = $datos['cancionId'];
            $descripcion = $datos['descripcionCancionEditar'];
            $fecha = $datos['fechaCancionEditar'];
            $idArtista = $datos['artistaIdEditarC'];
            $query = $this->db->prepare('UPDATE canciones SET nombre=? ,descripcion=? ,fecha_estreno=?, fk_id_artistas=? WHERE id_canciones=?');
            $query->execute([$nombre,$descripcion,$fecha,$idArtista, $idCancion]);
        }
    } 
?>  