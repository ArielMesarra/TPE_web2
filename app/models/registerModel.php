<?php

    class registerModel{

        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_bd;charset=utf8', 'root', '');
        }
        
        function registrar($nombre,$email,$contraseña){
            $query=$this->db->prepare("INSERT INTO usuarios(nombre, email, contraseña) VALUES (?,?,?)");
            $query->execute([$nombre,$email,$contraseña]);
        }
    }

?>