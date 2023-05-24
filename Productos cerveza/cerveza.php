<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION["usuario"];
if ($varsesion == null || $varsesion = '') {
    header("Location:../../.././../Proyecto-Patio-Eventos/Login/login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cervezas</title>
    <link rel="icon" href="image/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="nav-logos">
            <div class="logo">
                <img src="image/patiol eventos-PhotoRoom.png-PhotoRoom.png" class="log" alt="logo" />
                <h1>Disco Bar</h1>
            </div>
            <ul>
                <li>
                    <div class="buscar">
                        <input type="text" placeholder="Buscar" required>
                        <div class="bt">
                            <img src="image/lupa.png" alt="" class="img">
                        </div>
                    </div>
                </li>
                <li><a href=""><img src="image/carrito de compras.png" alt="carrito" class="img" /></a></li>
                <li>
                    <img src="image/usuario.png" alt="login" class="img clic" onclick="toggleMenu()" />
                    <div class="sub-nav" id="subMenu">
                        <div class="sub-menu">
                            <div class="info">
                                <img src="image/usuario.png" alt="">
                                <h3><b>Diana Polanco</b></h3>
                            </div>
                            <hr>

                            <a href="../Controladores/cerrarsesion.php" class="sub-menu-link">
                                <img src="image/cerrar-sesion.png" alt="">
                                <p><b> Cerrar Sesión </b></p>
                                <span><b>></b></span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <nav>
            <ul class="menu-horizontal">
                <li><a href="../Inicio/inicio.php">Inicio</a></li>
                <li><a href="../Entretenimiento/entretenimiento.php">Entretenimiento</a></li>
                <li>
                    <a href="">Producto</a>
                    <ul class="menu-vertical">
                        <li><a href="../Productos cerveza/cerveza.php">Cerveza</a></li>
                        <li><a href="../Producto whisky/whisky.php">Whisky</a></li>
                    </ul>
                </li>
                <li><a href="../RegistroProveedores/proveedores.php">Proveedores</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-all">

        <input type="radio" id="1" name="image-slide" hidden>
        <input type="radio" id="2" name="image-slide" hidden>
        <input type="radio" id="3" name="image-slide" hidden>
        <input type="radio" id="4" name="image-slide" hidden>
        <input type="radio" id="5" name="image-slide" hidden>
        <input type="radio" id="6" name="image-slide" hidden>

        <div class="slide">
            <div class="item-slide">
                <img src="image/fondoslider1.jpg" alt="">
            </div>

            <div class="item-slide">
                <img src="image/fondoclub.jpg" alt="">
            </div>

            <div class="item-slide">
                <img src="image/5c34ee820e4f1.jpeg" alt="">
            </div>
            <div class="item-slide">
                <img src="image/fondoagula3.jpg" alt="">
            </div>
            <div class="item-slide">
                <img src="image/fondopaker.jpg" alt="">
            </div>
            <div class="item-slide">
                <img src="image/fondocosteñita.jpg" alt="">
            </div>
        </div>

        <div class="pagination">
            <label class="pagination-item" for="1">
                <img src="image/fondoslider1.jpg" alt="">
            </label>
            <label class="pagination-item" for="2">
                <img src="image/fondoclub.jpg" alt="">
            </label>
            <label class="pagination-item" for="3">
                <img src="image/5c34ee820e4f1.jpeg" alt="">
            </label>
            <label class="pagination-item" for="4">
                <img src="image/fondoagula3.jpg" alt="">
            </label>
            <label class="pagination-item" for="5">
                <img src="image/fondopaker.jpg" alt="">
            </label>
            <label class="pagination-item" for="6">
                <img src="image/fondocosteñita.jpg" alt="">
            </label>
        </div>

    </div>
    <div class="caontainer-main">
        <div class="titulo">
            <h2>El Listado de Nuestras Mejores Cervezas</h2>
        </div>
        <div class="container1">
            <div class="listados marg">
                <div class="lista">
                    <h4>Aguila Original</h4>
                    <p>330 ml</p>
                    <p>$3.000</p>
                    <img src="image/estrella.png" alt="">
                </div>
                <div class="logo-img">
                    <img src="image/Aguila-Original.png" alt="">
                </div>
            </div>

            <div class="listados">
                <div class="lista">
                    <h4>Aguila Light</h4>
                    <p>330 ml</p>
                    <p>$3.000</p>
                    <img src="image/estrella.png" alt="">
                </div>
                <div class="logo-img">
                    <img src="image/Aguila-Light.png" alt="">
                </div>
            </div>
            <div class="listados marg">
                <div class="lista">
                    <h4>Corona Extra</h4>
                    <p>330 ml</p>
                    <p>$3.000</p>
                    <img src="image/estrella.png" alt="">
                </div>
                <div class="logo-img">
                    <img src="image/Corona.png" alt="">
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="listados marg">
                <div class="lista">
                    <h4>Costeñita</h4>
                    <p>330 ml</p>
                    <p>$3.000</p>
                    <img src="image/estrella.png" alt="">
                </div>
                <div class="logo-img">
                    <img src="image/Costeñita.png" alt="">
                </div>
            </div>
            <div class="listados">
                <div class="lista">
                    <h4>Club Colombia</h4>
                    <p>330 ml</p>
                    <p>$3.500</p>
                    <img src="image/estrella.png" alt="">
                </div>
                <div class="logo-img">
                    <img src="image/Club-Colombia.png" alt="">
                </div>
            </div>
            <div class="listados marg">
                <div class="lista">
                    <h4>Poker</h4>
                    <p>330 ml</p>
                    <p>$3.500</p>
                    <img src="image/estrella.png" alt="">
                </div>
                <div class="logo-img">
                    <img src="image/Poker.png" alt="">
                </div>
            </div>
        </div>
        <div class="container3">
            <div class="listados marg">
                <div class="lista">
                    <h4>Heineken</h4>
                    <p>330 ml</p>
                    <p>$5.000</p>
                    <img src="image/estrella.png" alt="">
                </div>
                <div class="logo-img">
                    <img src="image/Heineken.png" alt="">
                </div>
            </div>
            <div class="listados marg">
                <div class="lista">
                    <h4>Bubweiser</h4>
                    <p>330 ml</p>
                    <p>$4.000</p>
                    <img src="image/estrella.png" alt="">
                </div>
                <div class="logo-img">
                    <img src="image/Budweiser.png" alt="">
                </div>
            </div>
        </div>

    </div>
    <footer>
        <div class="footer-siguenos">
            <p>Siguenos en:</p>
            <a href="https://www.facebook.com/dmpolanco2010?mibextid=ZbWKwL" target="_blank"><img src="image/facebook.png" alt=""></a>
            <a href="https://instagram.com/diana.polanco?igshid=YmMyMTA2M2Y=" target="_blank"><img src="image/instagram.png" alt=""></a>
        </div>
        <div class="footer-contacto">
            <p>Contacto</p>
            <div class="alinear">
                <a href="/"><img src="image/whatsapp.png" alt=""></a>
                <p class="p">317 5826001</p>
            </div>
            <div class="alinear">
                <a href="/"><img src="image/panorama.png" alt=""></a>
                <p>dmpolanco@hotmail.com</p>
            </div>
        </div>
        <div class="footer-horarios">
            <p>Horarios</p>
            <p>Lun - Vie: 8:00 - 20:00</p>
            <p>Sabado: 9:00 - 19:00</p>
            <p>Domingo: 9:00 - 20:00</p>
        </div>
    </footer>
    <script src="../js/main.js"></script>
</body>

</html>