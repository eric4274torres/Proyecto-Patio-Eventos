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
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="img/icon.png" type="image/png">
    <title>Descuentos</title>
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
                <li><a href="../Inicio/inicio.php"><img src="img/casa.png" alt="carrito" class="img" /></a></li>
                <li>
                    <img src="img/usuario.png" alt="login" class="img clic" onclick="toggleMenu(),ocultar()" />
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
                <li><a href="../Inicio/inicio.css">Inicio</a></li>
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
    <div class="principal">
        <div class="subtitulo">
            <h2>Ofertas y Descuentos todos los VIERNES</h2>
        </div>
        <div class="fila1">
            <div class="cerv aguila">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/descuento.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Aguila Original</h3>
                        <h3>330 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Aguila-Original.png" alt="">
                </div>
            </div>
            <div class="cerv">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/Descuento3.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Aguila Light</h3>
                        <h3>330 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Aguila-Light.png" alt="">
                </div>
            </div>
            <div class="cerv corona">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/descuento.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Corona Extra</h3>
                        <h3>330 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Corona.png" alt="">
                </div>
            </div>
        </div>
        <div class="fila2">
            <div class="cerv aguila">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/Descuento7.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Aguardiente</h3>
                        <h3>Antioqueño Azul</h3>
                        <h3>750 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Aguardiente.png" alt="">
                </div>
            </div>
            <div class="cerv">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/descuento.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Old Parr</h3>
                        <h3>750 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Old Parr.png" alt="">
                </div>
            </div>
            <div class="cerv corona">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/Descuento9.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Buchanan's</h3>
                        <h3>Master</h3>
                        <h3>1 Litro</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Bucana.png" alt="">
                </div>
            </div>
        </div>
        <div class="fila3">
            <div class="cerv aguila">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/descuento.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Black and White</h3>
                        <h3>700 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Black and Whith.png" alt="">
                </div>
            </div>
            <div class="cerv">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/Descuento33.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Club Colombia</h3>
                        <h3>330 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Club-Colombia.png" alt="">
                </div>
            </div>
            <div class="cerv corona">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/Descuento2.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Póker</h3>
                        <h3>330 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Poker.png" alt="">
                </div>
            </div>
        </div>
        <div class="fila4">
            <div class="cerv aguila">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/Descuento4.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Sello Negro</h3>
                        <h3>750 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Sello Negro.png" alt="">
                </div>
            </div>
            <div class="cerv">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/Descuento2.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Ron Medellín</h3>
                        <h3>750 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Ron Medellin.png" alt="">
                </div>
            </div>
            <div class="cerv corona">
                <div class="imgdes">
                    <div class="desc">
                        <img src="img/descuento.png" alt="">
                    </div>
                    <div class="nom">
                        <h3>Budweiser</h3>
                        <h3>330 ml</h3>
                    </div>
                </div>
                <div class="texto">
                    <img src="img/Budweiser.png" alt="">
                </div>
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