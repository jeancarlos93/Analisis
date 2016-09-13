<?php



include_once '../Data/DataProvedor.php';
include_once '../Domain/Proveedor.php';

$codigo = $_GET['codigoProveedor'];
eliminarProveedor($codigo);
?>

