<?php
include_once '../Data/DataCliente.php';
include_once '../Domain/Cliente.php';

$codigo = trim($_POST['codigo']);
$nombre = trim($_POST['nombre']);  
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$cedula = $_POST['cedula'];
                   
$cliente = new Cliente();
$cliente->setCodigo($codigo);
$cliente->setNombre($nombre);
$cliente->setApellido($apellido);
$cliente->setCedula($cedula);
$cliente->setTelefono($telefono);
modificarCliente($cliente);