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
    <link rel="stylesheet" href="whisky.css">
    <link rel="stylesheet" href="Imagenes/icon.png" type="image/png">
    <title>Whisky</title>
</head>

<body>
    <header>
        <div class="nav-logos">
            <div class="logo">
                <img src="imagenes/patiol eventos-PhotoRoom.png-PhotoRoom.png" class="log" alt="logo" />
                <h1>Disco Bar</h1>
            </div>
            <ul>
                <li>
                    <div class="buscar">
                        <input type="text" placeholder="Buscar" required>
                        <div class="bt">
                            <img src="Imagenes/lupa.png" alt="" class="img">
                        </div>
                    </div>
                </li>
                <li><a href=""><img src="imagenes/carrito de compras.png" alt="carrito" class="img" /></a></li>
                <li>
                    <img src="Imagenes/usuario.png" alt="login" class="img clic" onclick="toggleMenu()" />
                    <div class="sub-nav" id="subMenu">
                        <div class="sub-menu">
                            <div class="info">
                                <img src="Imagenes/usuario.png" alt="">
                                <h3><b>Diana Polanco</b></h3>
                            </div>
                            <hr>

                            <a href="../Controladores/cerrarsesion.php" class="sub-menu-link">
                                <img src="Imagenes/cerrar-sesion.png" alt="">
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
    <div class="container">
        <div class="img-bucana">
            <div class="titulo-bucana">
                <img src="Imagenes/Buchanans Deluxe.png" alt="">
            </div>
            <div class="cont-img">
                <img src="Imagenes/Buchanans.png" alt="">
            </div>
        </div>
        <div class="text">
            <h1>Aclamado por su suavidad, premiado por su calidad "Buchanan"</h1>
        </div>
    </div>

    <div class="container-main">
        <div class="whisky-text">
            <h2>Whisky Nuestro Mejor Productos</h2>
        </div>
        <div class="contenido">
            <div class="columna marg">
                <div class="nomb">
                    <h4>Aguardiente Antioqueño Azul</h4>
                    <p>750 ml</p>
                    <p>$110.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Aguardiente.png" alt="">
                </div>
            </div>
            <div class="columna">
                <div class="nomb">
                    <h4>Old Parr</h4>
                    <p>750 ml</p>
                    <p>$170.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Old Parr.png" alt="">
                </div>
            </div>
            <div class="columna marg">
                <div class="nomb">
                    <h4>Buchanan's Master</h4>
                    <p>1 Litro</p>
                    <p>$230.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Bucana.png" alt="">
                </div>
            </div>
        </div>
        <div class="contenido1">
            <div class="columna marg">
                <div class="nomb">
                    <h4>Buchanan's Deluxe</h4>
                    <p>1 Litro</p>
                    <p>$230.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Bucana Verde.png" alt="">
                </div>
            </div>
            <div class="columna">
                <div class="nomb">
                    <h4>Black and White</h4>
                    <p>700 ml</p>
                    <p>$80.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Black and Whith.png" alt="">
                </div>
            </div>
            <div class="columna marg">
                <div class="nomb">
                    <h4>Aguardiente Antioqueño Verde</h4>
                    <p>375 ml</p>
                    <p>$110.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Aguardiente Verde.png" alt="">
                </div>
            </div>
        </div>
        <div class="contenido2">
            <div class="columna marg">
                <div class="nomb">
                    <h4>Sello Negro</h4>
                    <p>750 ml</p>
                    <p>$116.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Sello Negro.png" alt="">
                </div>
            </div>
            <div class="columna">
                <div class="nomb">
                    <h4>Sello Rojo</h4>
                    <p>750 ml</p>
                    <p>$116.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Sello Rojo.png" alt="">
                </div>
            </div>
            <div class="columna marg">
                <div class="nomb">
                    <h4>Ron Medellín</h4>
                    <p>750 ml</p>
                    <p>$150.000</p>
                    <img src="Imagenes/estrella.png" alt="">
                </div>
                <div class="img-whisky">
                    <img src="Imagenes/Ron Medellin.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-siguenos">
            <p>Siguenos en:</p>
            <a href="https://www.facebook.com/dmpolanco2010?mibextid=ZbWKwL" target="_blank"><img src="Imagenes/facebook.png" alt=""></a>
            <a href="https://instagram.com/diana.polanco?igshid=YmMyMTA2M2Y=" target="_blank"><img src="Imagenes/instagram.png" alt=""></a>
        </div>
        <div class="footer-contacto">
            <p>Contacto</p>
            <div class="alinear">
                <a href="/"><img src="Imagenes/whatsapp.png" alt=""></a>
                <p class="p">317 5826001</p>
            </div>
            <div class="alinear">
                <a href="/"><img src="Imagenes/panorama.png" alt=""></a>
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