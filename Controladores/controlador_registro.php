<?php

if (!empty($_POST["submit"])) {
    if (empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["password"]) or empty($_POST["repassword"])) {
        echo '<div class="tex">Uno de los campos esta vacio</div>';
    } else {
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $password=md5($_POST["password"]);
        $repassword=md5($_POST["repassword"]);
        if ($password==$repassword) {
            $sql=$conexion->query("select * from usuario where Correo_Electronico='$correo'");
            if (!$sql->num_rows > 0) {
                $sql=$conexion->query("insert into usuario(Nombre,Correo_Electronico,Clave) values('$nombre','$correo','$password')");
                if ($sql==1){
                    echo '<script language="javascript">alert("Usuario registrado con exito");window.location.href="../Login/login.php"</script>';
                } else {
                    echo '<div class="tex">Hay un error</div>';
                }
            } else {
                echo'<script language="javascript">alert("El correo ya existe");</script>';
            }
        } else {
            echo '<div class="tex">La contraseña no coinciden</div>';
        }
    }

    
} 

?>