<?php

include_once '../Data/Data.php';
include_once '../Domain/Proveedor.php';

function getProveedores() {
    
    $mysqli = getConnection();
    $sql = "select * from proveedor;";
    $resultado = $mysqli->query($sql);
    $vector = [];
    
    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {  
            $proveedor = new Proveedor();
            $proveedor->setCodigo($row['codigo']); 
            $proveedor->setNombre($row['nombre']);
            $proveedor->setApellido($row['apellido']);
            $proveedor->setCorreo($row['correo']);
            $proveedor->setDirecion($row['direccion']);
            $proveedor->setEmpresa($row['empresa']);
            array_push($vector, $proveedor);
        }
    } else {
        echo "0 results";
    }
    
    $mysqli->close();     
    return $vector;
}

function getObtenerProveedor($codigoProveedor) {
    
  //  echo $codigoProveedor;
    
    $mysqli = getConnection();
    $sql = "select * from Proveedor where codigo=$codigoProveedor;";
    $resultado = $mysqli->query($sql);
    $vector = [];
    
    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {  
            $proveedor = new Proveedor();
            $proveedor->setCodigo($row['codigo']); 
            $proveedor->setNombre($row['nombre']);
            $proveedor->setApellido($row['apellido']);
            $proveedor->setCorreo($row['correo']);
            $proveedor->setDirecion($row['direccion']);
            $proveedor->setEmpresa($row['empresa']);
            $vector = $proveedor;
          //  array_push($vector, $proveedor);
        }
    } else {
        echo "0 results";
    }
    
    $mysqli->close();     
    return $vector;
}

function registrarProveedor($proveedor) {
    $conn = getConnection();
    $codigo= $proveedor->getCodigo();  //solo si no es autoincrement se usa 
    $nombre = $proveedor->getNombre();
    $apellido=$proveedor->getApellido();
    $correo=$proveedor->getCorreo();
    $direccion = $proveedor->getDirecion();
    $empresa = $proveedor->getEmpresa();  
    
    $sql = "insert into Proveedor (codigo,nombre,apellido,correo,direccion,empresa) VALUES('".$codigo."','".$nombre."','".$apellido."','".$correo."','".$direccion."','".$empresa."');";

    if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../index.php");
//    devolver a indice
    die();
    
    
    
}


function modificarProveedor($proveedor) {
    $conn = getConnection();
    $codigo= $proveedor->getCodigo(); 
    $nombre = $proveedor->getNombre();
    $apellido=$proveedor->getApellido();
    $correo=$proveedor->getCorreo();
    $direccion = $proveedor->getDirecion();
    $empresa = $proveedor->getEmpresa(); 
 
    echo $codigo;
    
    $sql = "Update Proveedor set nombre='$nombre', apellido='$apellido', correo='$correo', direccion='$direccion', empresa='$empresa' where codigo='$codigo'";
    
     if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../index.php");
//    devolver a indice
    die();
    
    
    
}
