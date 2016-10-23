<?php

include_once '../../Data/DataProducto.php';
include_once '../../Domain/Producto.php';

 $codigo = $_GET['codigoProducto'];

 eliminarProducto($codigo);
?>

