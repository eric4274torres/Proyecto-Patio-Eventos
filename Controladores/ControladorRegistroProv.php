<?php
    if(!empty($_POST["Registrar"])){
        if (empty($_POST["Codigo"]) or empty($_POST["Proveedor"]) or empty($_POST["Telefono"]) or empty($_POST["Direccion"]) or empty($_POST["Correo" ]) or empty($_POST["Estado" ]) ) {
            echo '<div class="echo">Es necesario ingresar los datos del proveedor</div>';
        } else {
            $Codigo = $_POST["Codigo"];
            $Proveedor = $_POST["Proveedor"];
            $Telefono = $_POST["Telefono"];
            $Direccion = $_POST["Direccion"];
            $Correo = $_POST["Correo"];
            $Productos = $_POST["Estado"];
            date_default_timezone_set('America/Bogota');
            $fecha_actual=date("Y-m-d H:i:s");
            $sql=$conexion-> query("INSERT INTO proveedores (Nit, Nombre_Proveedor, Telefono, Direccion, Fecha, Correo_Electronico, Producto_ID) values ('$Codigo','$Proveedor','$Telefono','$Direccion','$fecha_actual','$Correo','$Productos')");
            
            if ($sql==1) {
                 echo '<script language="javascript">alert("Proveedor registrado correctamente");</script>';
            } else {
                echo '<script language="javascript">alert("Error!");</script>';
            }
            
        }  
    }
?>

