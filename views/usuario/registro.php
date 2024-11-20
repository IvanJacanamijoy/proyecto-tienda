<h1 class="p-4">Registrarse</h1>

<!--<form action="index.php?controller=usuario&action=save" method="POST"> -->
<form action="<?=base_url?>usuario/save" method="post" class="p-4">
    <label for="nombre">Nombre</label>
    <input class="form-control" type="text" name="nombre" required/>
    
    <label for="apellidos">Apellidos</label>
    <input class="form-control" type="text" name="apellidos" required/>

    <label for="usuario">Email</label>
    <input class="form-control" type="email" name="email">

    <label for="contraseña">Contraseña</label>
    <input class="form-control" type="password" name="password">

    <input class="btn btn-primary mt-3" style="display:inline-block;" type="submit" value="Registrarse" />

</form>
