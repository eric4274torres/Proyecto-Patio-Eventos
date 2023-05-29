<?php
session_start();

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="echo">Uno de los campos esta vacio</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=md5($_POST["password"]);
        $_SESSION["usuario"]=$usuario;
        $sql=$conexion->query(" select * from usuario where Nombre='$usuario' and Clave='$clave' ");
        if ($datos=$sql->fetch_object()) {
            header("Location:../../../../Proyecto-Patio-Eventos/Inicio/inicio.php");
        } else {
            echo '<div class="echo">Usuario no registrado</div>'; 
        }
        

    }
    
}

?>