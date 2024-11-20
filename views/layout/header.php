<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewh1ort" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="<?=base_url?>assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
    </head>
    <body class="">
        <!-- Container -->
        <div id="container">
            <div class="row">
                <div class="col">
                    <!-- Header -->
                    <header id="header">
                        <img src="<?=base_url?>assets/img/logo.png" alt="logo de la tienda">
                        <div>
                            <a href="<?=base_url?>index.php">Tienda don Pepe</a>
                        </div>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Nav -->
                    <nav class="nav navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="margin: 1rem 0;">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" aria-current="page" href="<?=base_url?>">Inicio</a>
                                    <a class="nav-link" href="#">Categoria 1</a>
                                    <a class="nav-link" href="#">Categoria 2</a>
                                    <a class="nav-link" href="#">Categoria 3</a>
                                    <a class="nav-link" href="#">Categoria 4</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>