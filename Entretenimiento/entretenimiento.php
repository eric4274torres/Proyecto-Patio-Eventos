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
    <link rel="stylesheet" href="estilos.css" />
    <link rel="icon" href="image/icon.png" type="image/png">
    <title>Entretenimiento</title>
</head>

<body>
    <header>
        <div class="nav-logos">
            <div class="logo">
                <img src="image/patiol eventos-PhotoRoom.png-PhotoRoom.png" class="log" alt="/index.html" />
                <h1>Disco Bar</h1>
            </div>
            <ul>
                <li>
                    <a href="../Inicio/inicio.php"><img src="image/casa.png" alt="lupa" class="img" /></a>
                </li>
                <li>
                    <a href=""><img src="image/carrito de compras.png" alt="carrito" class="img" /></a>
                </li>
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
    <div class="interaction">
        <input type="radio" id="1" name="image-slide" hidden />
        <input type="radio" id="2" name="image-slide" hidden />
        <input type="radio" id="3" name="image-slide" hidden />
        <input type="radio" id="4" name="image-slide" hidden />
        <div class="slider">
            <div class="item"><img src="image/Natalia1.jpg" /></div>
            <div class="item"><img src="image/dominoIMAGEN.jpg" /></div>
            <div class="item"><img src="image/bar.jpg" /></div>
            <div class="item"><img src="image/barimagen.jpg" /></div>
        </div>
        <div class="pagina">
            <label class="item-pagina" for="1"><img src="image/Natalia1.jpg" /></label>
            <label class="item-pagina" for="2"><img src="image/dominoIMAGEN.jpg" /></label>
            <label class="item-pagina" for="3"><img src="image/bar.jpg" /></label>
            <label class="item-pagina" for="4"><img src="image/barimagen.jpg" /></label>
        </div>
    </div>
    <div class="contedorbox">
        <div class="info-one">

            <div class="text1">
                <p>Ven y disfruta con tus
                    amigos y familia aquí en Patio
                    Eventos Disco Bar
                    en nuestra sección de Discoteca
                    horario de atención de Viernes
                    a Domingo desde las 7 pm
                    no te lo pierdas...</p>
            </div>
            <div class="fiesta">
                <img src="image/8ac0f39b-aefa-4490-ab88-c7c3893b1fcc_16-9-discover-aspect-ratio_default_0.png" alt="">
            </div>
        </div>

        <div class="info-two">
            <div class="mesa-verde">
                <img src="image/f.elconfidencial.com_original_cd6_4da_638_cd64da6381d016b603ccdb899d92987a.png" alt="">
            </div>

            <div class="text2">
                <p>Ven a disfrutar con tus amigos
                    de nuestras mesas de billar...
                    "Por esa adrenalina que te da
                    un segundo antes de tirar"...
                    Horario de atención de
                    Martes a Domingo
                    desde las 9 am
                    hasta las 10 pm
                    Ven te esperamos...
                </p>
            </div>

        </div>
        <div class="info-three">
            <div class="text3">
                <p>También tenemos para ti el entretenimiento del
                    dominó ven y disfruta, comparte y desafía a tus amigos
                    Si tienes la ficha debes jugar, aunque el juego se pueda trancar,
                    que pierdas o ganes has de disfrutar” ven te esperamos..
                    Martes a Domingo desde las 9 am hasta las 10 pm.
                </p>
            </div>
            <div class="mesa-azul">
                <img src="image/D_NQ_NP_687842-MCO51230905475_082022-O-PhotoRoom.png-PhotoRoom.png" alt="">
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