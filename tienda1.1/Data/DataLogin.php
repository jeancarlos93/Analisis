<?php
include_once '../Data/Data.php';

function validarUsuarios($usuario, $contrasenia) {
    
    $mysqli = getConnection();
    $sql = "select * from vendedor where estado=1 and nombre='$usuario';";
    $usser = $mysqli->query($sql);
    
    if ($usser->num_rows > 0) {
        $sql = "select * from vendedor where estado=1 and nombre='$usuario' and contrasena='$contrasenia';";
        $clave = $mysqli->query($sql);
    
        if ($clave->num_rows > 0) {
            return true;
           // session_start(); 
            //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
         //   $_SESSION["autentica"] = "SIP"; 
          //  $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); 
            //nombre del usuario logueado. 
            //Direccionamos a nuestra página principal del sistema. 
          //  header ("Location: ../View/Header.php");
            
        }
        else{
            echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=\"index.php\"</script>";
            return false;
        }
    }
    else{
        echo"<script>alert('El usuario no existe.'); window.location.href=\"index.php\"</script>"; 
        return false;
    }
   $mysqli->close(); 
}
