<?php

    class Database{
        public static function connect(){
            $db = new mysqli('localhost','root','','tiendaivan2');
            $db->query("SET NAMES 'utf8'");

            if (mysqli_connect_errno()) {
                printf("Error de conexión: %s\n", mysqli_connect_error());
                exit();
            }
            return $db;
        }
    }