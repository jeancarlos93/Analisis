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

    function getCuentaXPagar() {

    $mysqli = getConnection();
    $sql = "select f.numFactura,v.nombre as ven,p.nombre,f.total,f.fecha 
        from proveedor p inner join facturaCompra f inner join vendedor v
        where f.codProveed = p.codigo and f.cedVendedor= v.cedula;";

    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {
          $cuentaxpagar = new CuentaXPagar();
          $cuentaxpagar->setFactura($row['numFactura']);
          $cuentaxpagar->setEmpleado($row['ven']);
          $cuentaxpagar->setProveedor($row['nombre']);
          $cuentaxpagar->setTotal($row['total']);
          $cuentaxpagar->setFecha($row['fecha']);
          
          array_push($vector, $cuentaxpagar);
        }
    } else {
        echo "0 results";
    }

    $mysqli->close();
    return $vector;
    
    }
