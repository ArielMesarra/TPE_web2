<?php

    class loginModel{

        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }

        function validar($nombre){
            $query=$this->db->prepare('SELECT * FROM usuarios WHERE nombre=?');
            $query->execute([$nombre]);
            $usuario_encontrado = $query->fetch(PDO::FETCH_OBJ);
            return $usuario_encontrado;
        }
    }

?>
