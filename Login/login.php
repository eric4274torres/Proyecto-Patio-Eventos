<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imagen/patiol eventos-PhotoRoom.png-PhotoRoom.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="imagen/icon.png" type="image/png" />
    <title>Login</title>
</head>

<body>
    <header>
        <div class="nav-logos">
            <div class="logo">
                <img src="imagen/patiol eventos-PhotoRoom.png-PhotoRoom.png" class="log" alt="logo" />
                <h1>Disco Bar</h1>
            </div>
            <ul>
                <li>
                    <a href="../Inicio/inicio.php"><img src="imagen/casa.png" alt="lupa" class="img" /></a>
                </li>
                <li>
                    <a href=""><img src="imagen/carrito de compras.png" alt="carrito" class="img" /></a>
                </li>
                <li>
                    <a href=""><img src="imagen/usuario.png" alt="login" class="img" /></a>
                </li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="container-logo">
            <div class="logo-disco">
                <img src="imagen/patiol eventos-PhotoRoom.png-PhotoRoom.png" alt="#" />
            </div>
            <h1>Disco Bar</h1>
        </div>
        <form method="post" action="">
            <?php

            include("../ModeloBD/conexion.php");
            include("../Controladores/controlador_login.php");

            ?>
            <div class="form-input">
                <img src="imagen/usuario-login.png" alt="" />
                <input type="text" placeholder="Usuario" name="usuario" />
            </div>
            <div class="form-input mar-input">
                <img src="imagen/candado.png" alt="" />
                <span class="icono-ojo">
                    <i class="fa-solid fa-eye-slash"></i>
                </span> 
                <input type="password" placeholder="Contraseña" name="password"  id="password"/>
            </div>

            <div class="submit">
                <input type="submit" value="Ingresar" name="btningresar" />
            </div>
            <div class="enlace mar">
                <a href="http://localhost:84/Proyecto-Patio-Eventos/RegistroUsuarios/registro.php" rel="noopener noreferrer">Registrarse</a>
            </div>
            <div class="enlace1 mar1">
                <a href="/" rel="noopener noreferrer">¿Has olvidado tu contraseña?</a>
            </div>
        </form>
    </div>
    <script src="./log.js"></script>
</body>

</html>