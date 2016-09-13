<?php

include_once '../Data/DataUsuario.php';
include_once '../Domain/Usuario.php';

$usuario = new Usuario();
$usuario->setNombre($nombre);
 header("Location: ../view/Listado_Usuarios.php");
getConsultarUsuario($cliente);

