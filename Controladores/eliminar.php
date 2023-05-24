<?php 
    include '../ModeloBD/conexion.php';
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM proveedores WHERE ID=$id");
    if ($sql==1) {
        header("Location:../../../../Proyecto-Patio-Eventos/RegistroProveedores/proveedores.php");
    } else {
        echo '<script>alert("No se pudo eliminar"); </script>';
    }
?>