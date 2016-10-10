<?php

include_once '../Data/DataInventario.php';
include_once '../Domain/Inventario.php';

$opcion = $_GET['buscarPor'];
getInventario($opcion);
