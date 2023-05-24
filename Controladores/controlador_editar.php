<?php
if (!empty($_POST["Editar"])) {
    if (!empty($_POST["Codigo"]) and !empty($_POST["Proveedor"]) and !empty($_POST["Telefono"]) and !empty($_POST["Direccion"]) and !empty($_POST["Correo" ]) and !empty($_POST["Estado"])) {
        $id=$_POST["id"];
        $nit=$_POST["Codigo"];
        $proveedor=$_POST["Proveedor"];
        $telefono=$_POST["Telefono"];
        $direccion=$_POST["Direccion"];
        $correo=$_POST["Correo"];
        $producto=$_POST["Estado"];

        $sql=$conexion->query("UPDATE proveedores SET Nit='$nit', Nombre_Proveedor='$proveedor', Telefono='$telefono', Direccion='$direccion', Correo_Electronico='$correo', Producto_ID='$producto' WHERE ID=$id");
        if ($sql==1) {
            echo '<script language="javascript">alert("Registro actualizado correctamente");window.location.href="../RegistroProveedores/proveedores.php"</script>';
        } else {
            echo '<div class="alerta">Error al editar proveedor</div>';
        }
        

    } else {
        echo '<div class="alerta">Uno de los campos esta vacio</div>';
    }
}
?>