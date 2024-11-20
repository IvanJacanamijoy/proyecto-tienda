<?php
    //Clase usuario
    class Usuario{
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $rol;
        private $imagen;
        //
        private $db;
        //---------------Contructor---------------//
        public function __CONSTRUCT(){
            $this->db = Database::connect();
        }

        //-----------------Getter-----------------//
        public function getId(){
            return $this -> id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT,['cost'=>4]);
        }

        public function getRol(){
            return $this->rol;
        }

        public function getImagen(){
            return $this->imagen;
        }

        //-----------------Setter-----------------//
        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        public function setApellidos($apellidos){
            $this->apellidos = $this->db->real_escape_string($apellidos);
        }

        public function setEmail($email){
            $this->email = $this->db->real_escape_string($email);
        }

        public function setPassword($password){
            $this->password = $this->db->real_escape_string($password);
        }

        public function setRol($rol){
            $this->rol = $this->db->real_escape_string($rol);
        }

        public function setImagen($imagen){
            $this->imagen = $this->db->real_escape_string($imagen);
        }

        //-----------------Metodos-----------------//

        public function save(){
            $sql = "INSERT INTO `t_usuarios` VALUES (NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'cliente', 'null');";
            $save = $this->db->query($sql);
        }

    }