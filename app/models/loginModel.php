<?php

    class loginModel{

        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
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
