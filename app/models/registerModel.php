<?php

    class registerModel{

        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
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
    }

?>