<?php

include_once '../Data/Data.php';
include_once '../Domain/Factura.php';
include_once '../Domain/Producto.php';
include_once '../Domain/Cliente.php';

function getNumeroFactura() {
    $numeroFactura;
    $mysqli = getConnection();
    $sql = "SELECT numFactura, (numFactura+1) as nuevo FROM `facturaVenta` order by numfactura desc limit 1;";
    $resultado = $mysqli->query($sql);
    $vector = [];
    $factura = new Factura();
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $factura->setNumeroFactura($row['nuevo']);
            $numeroFactura = $factura->getNumeroFactura();
        }
    } else {
        echo "0 results" . $codigoProducto . "hola";
    }
    $mysqli->close();
    return $numeroFactura;
}

function CierreCaja() {
    $conn = getConnection();
    $sql = "insert into cierreCaja VALUES(1,'2 0732 0202',now(),0,0,0,0,0);";

    if ($conn->query($sql) == TRUE) {
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    die();
}

function getProductosVentas() {
    $mysqli = getConnection();
    $sql = "select p.codigo,p.descripcion,marca,categoria, p.precioUnitario,p.precioVenta from producto p inner join categoriaProd c on c.id = p.idCategoriaProd
inner join marcaProd m on m.id=p.idmarcaProd where estado = 1;";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $productos = new Producto();
            $productos->setId($row['codigo']);
            $productos->setDescripcion($row['descripcion']);
            $productos->setPrecioUnitario($row['precioUnitario']);
            $productos->setPrecioVenta($row['precioVenta']);
            $productos->setMarca($row['marca']);
            $productos->setCategoria($row['categoria']);

            array_push($vector, $productos);
        }
    } else {
        echo "0 resultados";
    }

    $mysqli->close();
    return $vector;
}

function getBusquedaAvanzadaProducto($busquedaAvanzada){
     $mysqli = getConnection();
    $sql = "select p.codigo,p.descripcion,marca,categoria, p.precioUnitario,p.precioVenta from producto p inner join categoriaProd c on c.id = p.idCategoriaProd
inner join marcaProd m on m.id=p.idmarcaProd where estado = 1 and p.codigo like  '%".$busquedaAvanzada."%' or p.descripcion like '%".$busquedaAvanzada."%';";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $productos = new Producto();
            $productos->setId($row['codigo']);
            $productos->setDescripcion($row['descripcion']);
            $productos->setPrecioUnitario($row['precioUnitario']);
            $productos->setPrecioVenta($row['precioVenta']);
            $productos->setMarca($row['marca']);
            $productos->setCategoria($row['categoria']);

            array_push($vector, $productos);
        }
    } else {
       echo $argumento = '';
    }
    $mysqli->close();
   
   echo $argumento = json_encode($vector);
    return $argumento; 
    
}


function getBusquedaAvanzadaCliente($busquedaAvanzada){

    $mysqli = getConnection();
    $sql = "select * from cliente where estado = 1 and cedula like  '%".$busquedaAvanzada."%' or nombre like '%".$busquedaAvanzada."%' or apellido like '%".$busquedaAvanzada."%';";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
          $cliente = new Cliente();
          $cliente->setCodigo($row['codigo']);
          $cliente->setNombre($row['nombre']);
          $cliente->setApellido($row['apellido']);
          $cliente->setCedula($row['cedula']);
          $cliente->setTelefono($row['telefono']);
            array_push($vector, $cliente);
        }
    } else {
       echo $argumento = '';
    }
    $mysqli->close();
   
   echo $argumento = json_encode($vector);
    return $argumento; 
    
    }


function getBuscarProducto($codigo) {
    $mysqli = getConnection();
    $sql = "select p.codigo,p.descripcion,marca,categoria, p.precioUnitario,p.precioVenta from producto p inner join categoriaProd c on c.id = p.idCategoriaProd
inner join marcaProd m on m.id=p.idmarcaProd where estado = 1 and p.codigo=$codigo;";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $productos = new Producto();
            $productos->setId($row['codigo']);
            $productos->setDescripcion($row['descripcion']);
            $productos->setPrecioUnitario($row['precioUnitario']);
            $productos->setPrecioVenta($row['precioVenta']);
            $productos->setMarca($row['marca']);
            $productos->setCategoria($row['categoria']);

            array_push($vector, $productos);
        }
    } else {
        
       echo $argumento = '';
    
    }

    $mysqli->close();
   
   echo $argumento = json_encode($vector);
    return $argumento;
}

Function facturar($factura,$cantidadProducto,$codigosProductos,$total) {// la variable total se usa principalmente cuando al forma de pago es credito ya que el total se guarda en el abono pero el pago final es lo que secanceló en la factura

    $numeroFactura=getNumeroFactura();
    $conn = getConnection();

    $nombreCliente = $factura->getNombreCliente();
    $nombreVendedor = $factura->getNombreVendedor();
    $formaPago = $factura->getFormaPago();
    $total = $factura->getTotal();
    $subTotal = $factura->getSubTotal();
    $formaPago = $factura->getFormaPago();
    $tipoFact =  $factura->getTipoFactura();
    $sql = "insert into facturaVenta (codCliente,cedVendedor,total,subtotal,fecha,formaPago,tipoFactura) VALUES(" . $nombreCliente . ",'" . $nombreVendedor . "'," . $total . "," . $subTotal . ", now(),'" . $formaPago . "','" . $tipoFact . "');";
    
    if ($conn->query($sql) == TRUE) {
       // echo "GUARDADO ";    
        
        foreach( $cantidadProducto as $key => $c ) {
            $sqlDetalleFactura = "insert into detalleFactVenta (numFactVenta,codProducto,cantProducto) values (".$numeroFactura.",".$codigosProductos[$key].",".$c.");";
           $sqlInventario = "insert into inventario (codProducto,tipo,fecha,cantidad,idTalla,idColor) values (".$codigosProductos[$key].",'salida',now(),".$c.",4,3);";
            $conn->query($sqlDetalleFactura);
            $conn->query($sqlInventario);
        }         
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     header("Location:../View/FacturaVenta.php");
    $conn->close();
    die();
    
    
   
    
}
