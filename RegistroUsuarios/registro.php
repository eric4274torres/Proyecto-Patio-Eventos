<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" type="image/png">
    <title>Registro</title>
</head>

<body>
    <header>
        <div class="nav-logos">
            <div class="logo">
                <img src="img/patiol eventos-PhotoRoom.png-PhotoRoom.png" class="log" alt="logo" />
                <h1>Disco Bar</h1>
            </div>
            <ul>
                <li><a href="../Login/login.php"><img src="img/casa.png" alt="lupa" class="img" /></a></li>
                <li><a href=""><img src="img/carrito de compras.png" alt="carrito" class="img" /></a></li>
                <li><a href="../Login/login.php"><img src="img/usuario.png" alt="login" class="img" /></a></li>
            </ul>
        </div>
    </header>

    <div class="reg">
        <h1>Registro de Usuarios</h1>
        <div class="container">
            <form method="post" action="">
                <div class="cuerpo">
                    <div class="container1">
                        <div class="form-container mar">
                            <div class="form-input">
                                <input name="nombre" type="text" id="nombre">
                            </div>
                            <div class="label">
                                <label for="nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="form-container">
                            <div class="form-input">
                                <input name="correo" type="email" id="correo">
                            </div>
                            <div class="label">
                                <label for="correo">Correo Electronico</label>
                            </div>
                        </div>
                    </div>
                    <div class="container1">
                        <div class="form-container mar">
                            <div class="form-input">
                                <span class="icon-eye">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </span>
                                <input type="password" name="password" id="pass">
                            </div>
                            <div class="label">
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                        <div class="form-container">
                            <div class="form-input">
                                <span class="icon">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </span>
                                <input type="password" name="repassword" id="repass">
                            </div>
                            <div class="label">
                                <label for="repassword">Confirmar Contraseña</label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                include '../ModeloBD/conexion.php';
                include '../Controladores/controlador_registro.php'

                ?>
                <div class="btn">
                    <input name="submit" type="submit" id="boton" value="Registrar">
                </div>
            </form>
        </div>
    </div>
    <script src="./main.js"></script>
</body>

</html>