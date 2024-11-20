<?php

class usuarioController{
  public function index(){
    echo "<h1>Controlador de usuarios</h1>";
  }

  public function registrar(){
    require_once 'views/usuario/registro.php';
  }

  public function save(){
    require_once 'models/usuario.php';
    //si existe post muestre post
    if(isset($_POST)){
      //existe un post de nombre, ponga el nombre, sino ponga false,
      //se usa para prevenir inyeccion sql
      $nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;
      $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos']:false;
      $email = isset($_POST['email']) ? $_POST['email']:false;
      $password = isset($_POST['password']) ? $_POST['password']:false;

      if($nombre && $apellidos && $email && $password){
        //creamos un nuevo usuario
        $usuario = new Usuario();
        //asignamos atributos al usuario creado
        $usuario->setNombre($nombre);
        $usuario->setApellidos($apellidos);
        $usuario->setEmail($email);
        $usuario->setPassword($password);
        
        //Guardamos al usuario
        $usuario->save();

        //$_SESSION permite guardar y devolver información
        // entre los requests de la sesión activa de un usuario.

        //si existe usuario entonces
        if($usuario){
          $_SESSION['register'] = "Complete";
        }else{
          $_SESSION['register'] = "Failed";
        }
        
      }else{
        $_SESSION['register'] = "Failed";
      }

    }
  }

}