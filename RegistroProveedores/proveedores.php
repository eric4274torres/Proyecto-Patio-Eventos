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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="img/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <title>Proveedor</title>
</head>

<body>
    <header>
        <div class="nav-logos">
            <div class="logo">
                <img src="img/patiol eventos-PhotoRoom.png-PhotoRoom.png" class="log" alt="logo" />
                <h1>Disco Bar</h1>
            </div>
            <ul>
                <li><a href="http://localhost:84/Proyecto-Patio-Eventos/Inicio/inicio.php"><img src="img/casa.png" alt="lupa" class="img" /></a></li>
                <li><a href=""><img src="img/carrito-de-compras (3).png" alt="carrito" class="img" /></a></li>
                <li>
                    <img src="img/usuario.png" alt="login" class="img clic" onclick="toggleMenu()" />
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
                <li><a href="http://localhost:84/Proyecto-Patio-Eventos/Inicio/inicio.php">Inicio</a></li>
                <li><a href="http://localhost:84/Proyecto-Patio-Eventos/Entretenimiento/entretenimiento.php">Entretenimiento</a></li>
                <li>
                    <a href="">Producto</a>
                    <ul class="menu-vertical">
                        <li><a href="http://localhost:84/Proyecto-Patio-Eventos/Productos%20cerveza/cerveza.php">Cerveza</a></li>
                        <li><a href="http://localhost:84/Proyecto-Patio-Eventos/Producto%20whisky/whisky.php">Whisky</a></li>
                    </ul>
                </li>
                <li><a href="">Proveedores</a></li>
            </ul>
        </nav>
    </header>
    <div class="formulario">
        <div class="container">
            <div class="logo-nombre">
                <img class="logoba" src="img/patiol eventos-PhotoRoom.png-PhotoRoom.png" alt="" style="width: 200px;">
                <h1>Disco Bar</h1>
            </div>
            <div class="titulo">
                <h1>Registro Proveedores</h1>
            </div>
            <div class="buscador">
                <form action="" method="post" class="form-bucar">
                    <div class="buscar">
                        <img src="./img/codigos-de-busqueda.png" alt="">
                        <input type="text" name="campo" id="campo" placeholder="Buscar" onkeyup="getData()">
                    </div>
                </form>
            </div>

        </div>
        <div class="container-registro">
            <form action="" method="post">
                <?php
                include '../ModeloBD/conexion.php';
                include '../Controladores/ControladorRegistroProv.php';
                ?>
                <div class="requisitos">
                    <div class="codigo">
                        <label>Nit:</label>
                        <input type="text" name="Codigo">
                    </div>
                    <div class="nombre">
                        <label>Proveedor:</label>
                        <input type="text" name="Proveedor">
                    </div>
                    <div class="telefono">
                        <label>Telefono:</label>
                        <input type="text" name="Telefono">
                    </div>
                    <div class="direccion">
                        <label>Dirección:</label>
                        <input type="text" name="Direccion">
                    </div>
                    <div class="correo">
                        <label>Correo:</label>
                        <input type="text" name="Correo">
                    </div>
                    <div class="producto">
                        <?php
                        include '../ModeloBD/conexion.php';
                        $sql = $conexion->query("SELECT ID, Nombre_Producto FROM productos ORDER BY Nombre_Producto ASC");
                        $resultado = $sql;
                        ?>
                        <label>Productos:</label>
                        <select name="Estado" id="estado">
                            <option value="0">Seleccionar</option>
                            <?php
                            while ($rows = $resultado->fetch_assoc()) { ?>
                                <option value="<?php echo $rows['ID']; ?>"><?php echo $rows['Nombre_Producto']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="registrar">
                    <input type="submit" value="Registrar" name="Registrar">
                </div>
            </form>
            <div class="tab">
                <table id="tablaProveedores" class="display nowrap">
                    <thead>
                        <tr class="sticky">
                            <th>ID</th>
                            <th>Nit</th>
                            <th>Proveedor</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Correo</th>
                            <th>Producto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="content">


                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="./main.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/confirmar.js"></script>
</body>

</html>