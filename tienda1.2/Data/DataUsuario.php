<?php

include_once '../Data/Data.php';
include_once '../Domain/Proveedor.php';

function getListaUsuarios() {
    
    $mysqli = getConnection();
    $sql = "select * from vendedor where estado=1;";
    $resultado = $mysqli->query($sql);
    $vector = [];
    
    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {  
            $usuario = new Usuario();
            $usuario->setNombre($row['nombre']);
            $usuario->setApellido($row['apellido']);
            $usuario->setTelefono($row['telefono']);
            $usuario->setCedula($row['cedula']);
            $usuario->setFechaContrato($row['fechaContratacion']);
            $usuario->setContrasenia($row['contrasena']);
            $usuario->setTipoEmpleado($row['tipoEmpleado']);
            array_push($vector, $usuario);
        }
    } else {
        echo "0 results";
    }
    
    $mysqli->close();     
    return $vector;
}

function getUsuario($cedulaUsuario) {
    $mysqli = getConnection();
    $sql = "select * from vendedor where cedula='$cedulaUsuario';";
    $resultado = $mysqli->query($sql);
    $vector = [];
    
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {  
            $usuario = new Usuario();
            $usuario->setNombre($row['nombre']);
            $usuario->setApellido($row['apellido']);
            $usuario->setTelefono($row['telefono']);
            $usuario->setCedula($row['cedula']);
            $usuario->setFechaContrato($row['fechaContratacion']);
            $usuario->setContrasenia($row['contrasena']);
            $usuario->setTipoEmpleado($row['tipoEmpleado']);
          
            $vector = $usuario;
          //  array_push($vector, $proveedor);
        }
    } else {
        echo "0 results";
    }
     //echo $usuario->getNombre() ;
      //      echo $usuario->getApellido();
      //       echo $usuario->getCedula() ;
    $mysqli->close();     
    return $vector;
}

function registrarUsuario($usuario) {
    $conn = getConnection(); //solo si no es autoincrement se usa 
    $nombre = $usuario->getNombre();
    $apellido=$usuario->getApellido();
    $telefono = $usuario->getTelefono();
    $cedula=$usuario->getCedula();
    $contrasenia = $usuario->getContrasenia();
    $tipoEmpleado = $usuario->getTipoEmpleado();
    
    $sql = "insert into vendedor(nombre,apellido,telefono,cedula,fechaContratacion, contrasena, tipoEmpleado) VALUES('".$nombre."','".$apellido."','".$telefono."','".$cedula."', curdate(), '".$contrasenia."', '".$tipoEmpleado."');";

    if ($conn->query($sql) == TRUE) {
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../View/Listado_Usuarios.php");
    die();
    
    
    
}


function modificarUsuario($usuario) {
    $conn = getConnection();
    $nombre = $usuario->getNombre();
    $apellido=$usuario->getApellido();
    $telefono = $usuario->getTelefono();
    $cedula=$usuario->getCedula();
    $contrasenia = $usuario->getContrasenia();
    $tipoEmpleado = $usuario->getTipoEmpleado();
 
   // echo $codigo;
    
    $sql = "Update vendedor set nombre='$nombre', apellido='$apellido', telefono='$telefono', contrasena='$contrasenia',tipoEmpleado='$tipoEmpleado' where cedula='$cedula'";
    
     if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../View/Listado_Usuarios.php");
//    devolver a indice
    die();
    
    
    
}


function eliminarUsuario($cedulaUsuario) {
    $conn = getConnection();
        echo $cedulaUsuario;
    $sql = "Update vendedor set estado= 0 where cedula='$cedulaUsuario'";

 //   $resultado = $mysqli->query($sql);
    
     if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../view/Listado_Usuarios.php");
//    devolver a indice
    die();
    
    
    
}


function getConsultarUsuario($nombre) {
    
   echo $nombre;
    
    
    $mysqli = getConnection();
    
    $sql = "SELECT * FROM vendedor WHERE nombre LIKE '%$nombre%'  and estado = 1;";

    $resultado = $mysqli->query($sql);
    $vector = [];
    
    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {  
            $usuario = new Usuario();
            $usuario->setNombre($row['nombre']);
            $usuario->setApellido($row['apellido']);
            $usuario->setTelefono($row['telefono']);
            $usuario->setCedula($row['cedula']);
            $usuario->setFechaContrato($row['fechaContratacion']);
            $usuario->setContrasenia($row['contrasena']);
            $usuario->setTipoEmpleado($row['tipoEmpleado']);
          
            $vector = $usuario;
          //  array_push($vector, $proveedor);
        }
    } else {
        echo "0 results";
    }
     //echo $usuario->getNombre() ;
      //      echo $usuario->getApellido();
      //       echo $usuario->getCedula() ;
    $mysqli->close();     
    return $vector;
}