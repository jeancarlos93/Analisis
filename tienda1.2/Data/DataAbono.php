<?php

include_once '../Data/Data.php';
include_once '../Domain/Abono.php';

if (isset($_REQUEST['opcion'])) {
$name = $_REQUEST['opcion'];

if ($name==0){
        consultarCliente();
    }
} else {
$name = "";
}

function getAbonos($codigoFactura) {

    $mysqli = getConnection();
    $sql = "select codigo,montoAbonado,saldoInicial,(saldoInicial-montoAbonado) as saldoFinal,fechaSalida from abono where estado=1 and numFactCompra= $codigoFactura;";
    $resultado = $mysqli->query($sql);
    $vector = []; 

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $abono = new Abono();
          $abono->setCodigo($row['codigo']);
          $abono->setAbono($row['montoAbonado']);
          $abono->setSaldoInicial($row['saldoInicial']);
          $abono->setSaldoFinal($row['saldoFinal']);
          $abono->setFecha($row['fechaSalida']);
          
          array_push($vector, $abono);
        }
    } else {
        echo "No hay abonos";
    }

    $mysqli->close();
    return $vector;   
    }

    function getModificarAbono($codigoAbono){

    $mysqli = getConnection();
    $sql = "select codigo,montoAbonado,saldoInicial,saldoActual,fechaSalida from abono where codigo= $codigoAbono;";
    $resultado = $mysqli->query($sql);
    $vector = []; 

    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {
          $abono = new Abono();
          $abono->setCodigo($row['codigo']);
          $abono->setAbono($row['montoAbonado']);
          $abono->setSaldoInicial($row['saldoInicial']);
          $abono->setSaldoFinal($row['saldoActual']);
          $abono->setFecha($row['fechaSalida']);
          
          $vector= $abono;
        }
    } else {
        echo "No hay abonos";
    }
    $mysqli->close();
    return $vector;   
 } 
    
 function registrarAbonoCompra($abono) {
        
    $conn = getConnection();
    $factCompra = $abono->getFacturaCompra();
//    $factVenta = $abono->getFacturaVenta();
    $tipo= $abono->getTipo();
    $montoAbonado= $abono->getAbono();
    $saldoInicial = $abono->getSaldoInicial();
    $saldoFinal= $abono->getSaldoFinal();
    $fecha = $abono->getFecha();
    
    $sql= "call registrarAbonos ('".$factCompra."','".$tipo."','".$montoAbonado."','".$saldoInicial."','".$saldoFinal."','".$fecha."');";
    
    if ($conn->query($sql) == TRUE) {
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }  
    $conn->close();
       header("Location: ../View/Listado_Abonos.php?codigo=$factCompra");
    die();      
}
   
 function registrarAbonoVenta($abono) { ///aqui va el sql de abono venta
        
    $conn = getConnection();
    $factCompra = $abono->getFacturaCompra();
//    $factVenta = $abono->getFacturaVenta();
    $tipo= $abono->getTipo();
    $montoAbonado= $abono->getAbono();
    $saldoInicial = $abono->getSaldoInicial();
    $saldoFinal= $abono->getSaldoFinal();
    $fecha = $abono->getFecha();
    
    $sql= "call registrarAbonos ('".$factCompra."','".$tipo."','".$montoAbonado."','".$saldoInicial."','".$saldoFinal."','".$fecha."');";
    
    if ($conn->query($sql) == TRUE) {
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }  
    $conn->close();
       header("Location: ../View/Listado_Abonos.php?codigo=$factCompra");
    die();
      
}

function modificarAbono($abono) {
    
    $conn = getConnection();
    $codigo = $abono->getCodigo(); 
    $factCompra = $abono->getFacturaCompra();
    $factVenta = $abono->getFacturaVenta();
    $tipo = $abono->getTipo();
    $montoAbono = $abono->getAbono();
    $saldoInicial = $abono->getSaldoInicial(); 
    $saldoActual = $abono->getSaldoActual(); 
 
    $sql = "Update proveedor set numFactVenta='$factVenta', numFactCompra='$factCompra', tipo='$tipo', montoAbonado='$montoAbono', saldoInicial='$saldoInicial', saldoActual='$saldoActual' where codigo='$codigo'";
    
     if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../View/Listado_Abonos.php");
//    devolver a indice
    die();
    
}

function getTotalApagar($codigoFactura){    
    
    $mysqli = getConnection();
    $sql = "SELECT saldoInicial-sum(montoAbonado)as total FROM abono WHERE numFactCompra = $codigoFactura;";
    $resultado = $mysqli->query($sql);
    
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc(); 
        $abono = new Abono();
        $abono->setSaldoInicial($row['total']);         
        }   
    $mysqli->close();
    return $abono;   
    
}
