<?php
    class Model{
        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }

        function getItems(){
            // $query = $this->db->prepare('SELECT c.nombre, c.descripcion, c.fecha_estreno, c.fk_id_artistas FROM canciones AS c');
            $query=$this->db->prepare('SELECT c.*,a.nombre AS nombreDeArtista FROM canciones AS c INNER JOIN artistas AS a ON c.fk_id_artistas = a.id');
            $query->execute();
            $canciones = $query->fetchAll(PDO::FETCH_OBJ);
            return $canciones;
        }
        
        function registrar($datos){
            var_dump($datos);
            $nombre = $datos['nombre_usuario'];
            $email = $datos['email'];
            $contraseña = $datos['contraseña'];
            $contraseña = password_hash($contraseña, PASSWORD_BCRYPT);
            if(!empty($nombre)&&!empty($email)&&!empty($contraseña)){
                $query=$this->db->prepare("INSERT INTO usuarios(nombre, email, contraseña) VALUES (?,?,?)");
                $query->execute([$nombre,$email,$contraseña]);
            }
        }

        function validar($datos){
            $nombre = $datos['nombre_usuario'];
            $contraseña = $datos['contraseña'];
            if(!empty($nombre)&&!empty($contraseña)){
                $query=$this->db->prepare('SELECT * FROM usuarios WHERE nombre=?');
                $query->execute([$nombre]);
                $usuario_encontrado = $query->fetch(PDO::FETCH_OBJ);
                if($usuario_encontrado && password_verify($contraseña, ($usuario_encontrado->contraseña))){
                    session_start();
                    $_SESSION["logueado"] = true;
                    $_SESSION["usuario"] = $nombre;
                    var_dump($_SESSION);
                    echo '<h1>Entraste!</h1>';
                }
                else{
                    echo '<h1>No tenes permisos de administrador metiche!</h1>';
                }
            }
        }

    }
?>