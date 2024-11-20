<div class="row">
    <div class="aside col-12 col-lg-3">
        <!-- Aside -->
        <aside class="col-12">
            <h2 class=" col-12 mb-5">Iniciar sesión</h2>
            <form class="col-12" novalidate>
                <div class="col-12">
                    <label for="usuario">Email</label>
                    <input class="form-control" type="email" name="usuario" required>

                </div>

                <label for="contraseña">Contraseña</label>
                <input class="form-control" type="password" name="contraseña" required>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
            <a class="mt-3" href="<?=base_url?>usuario/registrar">Registrarse</a>
        </aside>
    </div>

    <div class="vista col-12 col-lg-9 p-2">
    