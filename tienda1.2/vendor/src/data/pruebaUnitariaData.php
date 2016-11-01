<?php

include 'Data/Data.php';

function registrarProducto($producto) {
    $conn = getConnection();
    $descripcion = $producto->getDescripcion();
    $precioUnitario=$producto->getPrecioUnitario();
    $precioVenta=$producto->getPrecioVenta();
    $marca = $producto->getMarca();
    $categoria = $producto->getCategoria();

    $insert = true;
    
   // $sql = "insert into producto (descripcion,precioUnitario,precioVenta,idmarcaProd,idCategoriaProd,estado) VALUES('".$descripcion."',".$precioUnitario.",".$precioVenta.",".$marca.",".$categoria.",1);";
         
   // if ($conn->query($sql) == TRUE) {
        return true;
    //} else {  
      //   return  false;
    //}

    $conn->close();
}

