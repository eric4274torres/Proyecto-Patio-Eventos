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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="img/icon.png" type="image/png">
    <title>Patio Eventos Disco Bar</title>
</head>

<body>
    <header>
        <div class="nav-logos">
            <div class="logo">
                <img src="img/patiol eventos-PhotoRoom.png-PhotoRoom.png" class="log" alt="logo" />
                <h1>Disco Bar</h1>
            </div>
            <ul>
                <li>
                    <div class="buscar">
                        <input type="text" placeholder="Buscar" required>
                        <div class="bt">
                            <img src="img/lupa.png" alt="" class="img">
                        </div>
                    </div>
                </li>
                <li>
                    <a href=""><img src="img/carrito de compras.png" alt="carrito" class="imag" /></a>
                </li>
                <li>
                    <img src="img/usuario.png" alt="login" class="imag clic" onclick="toggleMenu()" />
                    <div class="sub-nav" id="subMenu">
                        <div class="sub-menu">
                            <div class="info">
                                <img src="img/usuario.png" alt="">
                                <h3><b>Diana Polanco</b></h3>
                            </div>
                            <hr>

                            <a href="../Controladores/cerrarsesion.php" class="sub-menu-link">
                                <img src="img/cerrar-sesion.png" alt="">
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
                <li><a href="">Inicio</a></li>
                <li><a href="../Entretenimiento/entretenimiento.php">Entretenimiento</a></li>
                <li>
                    <a href="/">Producto</a>
                    <ul class="menu-vertical">
                        <li><a href="../Productos cerveza/cerveza.php">Cerveza</a></li>
                        <li><a href="../Producto whisky/whisky.php">Whisky</a></li>
                    </ul>
                </li>
                <li><a href="../RegistroProveedores/proveedores.php">Proveedores</a></li>
            </ul>
        </nav>
    </header>
    <div class="interaction">
        <input type="radio" id="1" name="image-slide" hidden />
        <input type="radio" id="2" name="image-slide" hidden />
        <input type="radio" id="3" name="image-slide" hidden />
        <input type="radio" id="4" name="image-slide" hidden />
        <input type="radio" id="5" name="image-slide" hidden />
        <div class="slider">
            <div class="item"><img src="img/Grupo 1.png" /></div>
            <div class="item"><img src="img/Grupo 2.png" /></div>
            <div class="item"><img src="img/imagenbebida.jpg" /></div>
            <div class="item"><img src="img/cervezas.jpg" /></div>
            <div class="item"><img src="img/ronesimagen.jpg" /></div>
        </div>
        <div class="pagina">
            <label class="item-pagina" for="1"><img src="img/Grupo 1.png" /></label>
            <label class="item-pagina" for="2"><img src="img/Grupo 2.png" /></label>
            <label class="item-pagina" for="3"><img src="img/imagenbebida.jpg" /></label>
            <label class="item-pagina" for="4"><img src="img/cervezas.jpg" /></label>
            <label class="item-pagina" for="5"><img src="img/ronesimagen.jpg" /></label>
        </div>
    </div>
    <div class="container1">
        <div class="container-img">
            <div class="imagen">
                <img src="img/c.peronita.png" />
            </div>
            <div class="text">
                <p>
                    La vida se disfruta más si de un buen licor con nuestros amigos y
                    seres queridos podemos compartir, beber y disfrutar.
                </p>
            </div>
        </div>
        <div class="container-img1">
            <div class="text1">
                <h1>
                    Descuentos del 10% de tus bebidas preferidas
                </h1>
                <p>
                    Si hay licor también hay diversión por montón.
                </p>
                <a href="../Descuento/descuento.php">Descuentos</a>
            </div>
            <div class="imagen1">
                <img src="img/coronita.png">
            </div>
        </div>
        <div class="container-img2">
            <div class="imagen2">
                <img src="img/billlar.png" alt="">
            </div>
            <div class="text2">
                <p>
                    Licor de calidad = celebración inolvidable de la que todos bien van a hablar.
                </p>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-siguenos">
            <p>Siguenos en:</p>
            <a href="https://www.facebook.com/dmpolanco2010?mibextid=ZbWKwL" target="_blank"><img src="img/facebook.png" alt=""></a>
            <a href="https://instagram.com/diana.polanco?igshid=YmMyMTA2M2Y=" target="_blank"><img src="img/instagram.png" alt=""></a>
        </div>
        <div class="footer-contacto">
            <p>Contacto</p>
            <div class="alinear">
                <a href="/"><img src="img/whatsapp.png" alt=""></a>
                <p class="p">317 5826001</p>
            </div>
            <div class="alinear">
                <a href="/"><img src="img/panorama.png" alt=""></a>
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