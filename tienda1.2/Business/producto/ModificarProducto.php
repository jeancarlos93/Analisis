<?php

include_once '../../Data/DataProducto.php';
include_once '../../Domain/Producto.php';

$codigo = trim($_POST['codigo']);
$descripcion = $_POST['descripcion'];  //asocia los name de los campos de las interfaces
$precioUnitario = $_POST['precioUnitario'];
$precioVenta = $_POST['precioVenta'];
$marca = $_POST['marcas'];
$categoria = $_POST['categoria'];


$producto = new Producto();
//$marcaP = new MarcaProducto();
$producto->setId($codigo);
$producto->setDescripcion($descripcion);
$producto->setPrecioUnitario($precioUnitario);
$producto->setPrecioVenta($precioVenta);
$producto->setMarca($marca);
$producto->setCategoria($categoria);

modificarProducto($producto);

//

