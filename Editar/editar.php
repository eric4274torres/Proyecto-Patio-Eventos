<?php
session_start();
error_reporting(0);
$varsesion= $_SESSION["usuario"];
if ($varsesion== null || $varsesion=''){
    header("Location:../../.././../Proyecto-Patio-Eventos/Login/login.php");
    die();
}
include '../ModeloBD/conexion.php';
$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM proveedores WHERE ID=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png" type="image/png">
    <link rel="stylesheet" href="editar.css">
    <title>Proveedor</title>
</head>

<body>
    <div class="formulario">
        <h1>Editar Proveedor</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
            include '../Controladores/controlador_editar.php';
            while ($datos = $sql->fetch_object()) { ?>
                <div class="codigo">
                    <div class="titulo">
                        <label>Nit:</label>
                    </div>
                    <div class="campo">
                    <input type="text" name="Codigo" value="<?= $datos->Nit ?>">
                    </div>
                </div>
                <div class="nombre">
                    <div class="titulo">
                        <label>Proveedor:</label>
                    </div>
                    <div class="campo">
                    <input type="text" name="Proveedor" value="<?= $datos->Nombre_Proveedor ?>">
                    </div>
                </div>
                <div class="telefono">
                    <div class="titulo">
                        <label>Telefono:</label>
                    </div>
                    <div class="campo">
                    <input type="text" name="Telefono" value="<?= $datos->Telefono ?>">
                    </div>
                </div>
                <div class="direccion">
                    <div class="titulo">
                        <label>Dirección:</label>
                    </div>
                    <div class="campo">
                    <input type="text" name="Direccion" value="<?= $datos->Direccion ?>">
                    </div>
                </div>
                <div class="correo">
                    <div class="titulo">
                        <label>Correo:</label>
                    </div>
                    <div class="campo">
                    <input type="text" name="Correo" value="<?= $datos->Correo_Electronico ?>">
                    </div>
                </div>
                <div class="producto">
                    <?php
                    include '../ModeloBD/conexion.php';
                    $sql = $conexion->query("SELECT ID, Nombre_Producto FROM productos ORDER BY Nombre_Producto ASC");
                    $resultado = $sql;
                    ?>
                    <div class="titulo">
                        <label>Productos:</label>
                    </div>
                    <div class="campo">
                    <select name="Estado" id="estado">
                        <option value="<?= $datos->Producto_ID ?>"></option>
                        <?php
                        while ($rows = $resultado->fetch_assoc()) { 
                            
                            if ($rows['ID']==$datos->Producto_ID) {
                            ?>
                            <option value="<?php echo $rows['ID']; ?>" selected><?php echo $rows['Nombre_Producto']; ?></option>
                        <?php
                        }else{?>
                            <option value="<?php echo $rows['ID']; ?>"><?php echo $rows['Nombre_Producto']; ?></option>
                        <?php } } ?>
                    </select>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="Editar">
                <input type="submit" value="Actualizar" name="Editar">
            </div>
            <div class="anchor">
            <a href="../RegistroProveedores/proveedores.php">Regresar</a>
            </div>
        </form>
    </div>
</body>

</html>