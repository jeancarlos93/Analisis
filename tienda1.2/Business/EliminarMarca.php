<?php
include_once '../Data/DataMarca.php';

$codigo = $_POST['id'];
$marca = $_POST['marca'];
eliminarMarca($codigo,$marca);
?>
