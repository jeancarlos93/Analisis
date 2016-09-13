<?php

include_once '../../Data/DataProducto.php';
include_once '../../Domain/marcaProducto.php';

$marcaP = $_POST['marca'];  //asocia los name de los campos de las interfaces

$marca = new MarcaProducto();
$marca->setMarca($marcaP);

registrarMarca($marca);
