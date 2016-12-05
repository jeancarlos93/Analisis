<?php

include_once '../Data/Data.php';
include_once '../Domain/CuentaXPagar.php';

if (isset($_REQUEST['opcion'])) {
$name = $_REQUEST['opcion'];

if ($name==0){
        consultarCliente();
    }
} else {
$name = "";
}

    function getApartados() {

    $mysqli = getConnection();
    $sql = "select f.numFactura,c.nombre,f.total,f.fecha 
        from facturaVenta f inner join cliente c
        where f.estado=1 and f.codCliente=c.codigo;";

    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {
          $apartado = new Apartados();
          $apartado->setCodigo($row['numFactura']);
          $apartado->setCliente($row['nombre']);          
          $apartado->setTotal($row['total']);
          $apartado->setFecha($row['fecha']);
          
          array_push($vector, $apartado);
        }
    } else {
        echo "0 results";
    }

    $mysqli->close();
    return $vector;
    
    }
