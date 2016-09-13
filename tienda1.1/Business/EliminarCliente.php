<?php

include_once '../Data/DataCliente.php';
include_once '../Domain/Cliente.php';

 $codigo = $_GET['codigoCliente'];
eliminarCliente($codigo);
?>
