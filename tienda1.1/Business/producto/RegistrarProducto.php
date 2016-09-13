<?php

include_once '../../Data/DataProducto.php';
include_once '../../Domain/Producto.php';

$descripcion = $_POST['descripcion'];  //asocia los name de los campos de las interfaces
$precioUnitario = $_POST['precioUnitario'];
$precioVenta = $_POST['precioVenta'];
$marca = $_POST['marcas'];
$categoria = $_POST['categoria'];


$producto = new Producto();
$marcaP = new MarcaProducto();
$producto->setDescripcion($descripcion);
$producto->setPrecioUnitario($precioUnitario);
$producto->setPrecioVenta($precioVenta);
$producto->setMarca($marca);
$producto->setCategoria($categoria);

registrarProducto($producto);


