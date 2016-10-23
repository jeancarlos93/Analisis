<?php

include_once '../../Data/DataCategoria.php';
include_once '../../Domain/CategoriaProducto.php';

$categoriaN = $_POST['categoria'];  //asocia los name de los campos de las interfaces
//sleep(5); 
$categoria = new categoriaProducto();
$categoria->setCategoria($categoriaN);
registrarCategoria($categoria);

