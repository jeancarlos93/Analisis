<?php
include_once '../Data/Data.php';
include_once '../Domain/Usuario.php';

function validarUsuarios($nombreUsuario, $contrasenia) {
    
    $usuario = new Usuario();
    $mysqli = getConnection();
    $sql = "select * from vendedor where estado=1 and nombre='$nombreUsuario';";
    $resultado = $mysqli->query($sql);
   // $conn->query($sql) == TRUE)
    
    if ($resultado->num_rows > 0)  {
        $clave = "select * from vendedor where estado=1 and nombre='$nombreUsuario' and contrasena='$contrasenia';";
        $resultado2 = $mysqli->query($clave);
    
        if ($resultado2->num_rows > 0) {
           // return true;
            while ($row = $resultado2->fetch_assoc()) {  
                $usuario->setNombre($row['nombre']);
                $usuario->setApellido($row['apellido']);
                $usuario->setTipoEmpleado($row['tipoEmpleado']);
         //   $vector = $usuario;
          //  array_push($vector, $proveedor);
        }
        
            $nombre = $usuario->getNombre();
            $apellido= $usuario->getApellido();
            $tipoEmpleado = $usuario->getTipoEmpleado();
            session_start(); 
            
            $_SESSION['usuario'] = $nombre; 
            $_SESSION['tipoEmpleado'] = $tipoEmpleado; 
            
            header ("Location: ../View/Header.php");
            
        }
        else{
            echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=\"/Tienda-vachelle/tienda1.1/index.php\"</script>";
          //  return false;
        }
    }
    else{
        echo"<script>alert('El usuario no existe.'); window.location.href=\"/Tienda-vachelle/tienda1.1/index.php\"</script>"; 
       // return false;
    }
   $mysqli->close(); 
}