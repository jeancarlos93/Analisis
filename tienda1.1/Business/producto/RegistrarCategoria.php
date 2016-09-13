<?php

include_once '../../Data/DataProducto.php';
include_once '../../Domain/CategoriaProducto.php';

$categoriaN = $_POST['categoria'];  //asocia los name de los campos de las interfaces

$categoria = new categoriaProducto();
$categoria->setCategoria($categoriaN);
registrarCategoria($categoria);

