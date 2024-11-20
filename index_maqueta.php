<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div id="container">
        <hearder id="header">
            <div id="logo">
                <img src="assets/img/ferretaria.PNG" alt="Ferreteria logo"/>
                <a href="index.php">Ferreteria ABC</a>
            </div>
        </hearder>
        <nav id="menu">       
            <ul>
                <li>
                    <a href="#">Inicia</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>
                <li>
                    <a href="#">Categoria 2</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" />
                        <label for="contrasena" >Contaseña</label>
                        <input type="password" name="password" />
                        <input type="submit" value="enviar"/>
                    </form>

                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar Pedidos</a> </li>
                        <li><a href="#">Gestionar categorias</a></li>
                    </ul>

                </div>
            </aside>
            <div id="central">
                <h1>Productos destacados</h1>
                <div class="producto">
                    <img src="assets/img/ferretaria.PNG" alt="Ferreteria logo"/>
                    <h2>Herramienta</h2>
                    <p>3000 pesos</p>
                    <a href="" class="button">Comprar</a>
                </div>

                <div class="producto">
                    <img src="assets/img/ferretaria.PNG" alt="Ferreteria logo"/>
                    <h2>Herramienta</h2>
                    <p>3000 pesos</p>
                    <a href="" class="button">Comprar</a>
                </div>     

                <div class="producto">
                    <img src="assets/img/ferretaria.PNG" alt="Ferreteria logo"/>
                    <h2>Herramienta</h2>
                    <p>3000 pesos</p>
                    <a href="" class="button">Comprar</a>
                </div>
          
            </div>
        </div>
        <footer id="footer">
            <p>Desarrollado por Washington Nieto &copy; <?=date("Y") ?></p>
        </footer>
    </div>
</body>
</html>