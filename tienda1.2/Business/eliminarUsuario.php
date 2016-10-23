<?php



include_once '../Data/DataUsuario.php';
include_once '../Domain/Usuario.php';

 $cedula = $_GET['cedulaUsuario'];

 eliminarUsuario($cedula);
?>
