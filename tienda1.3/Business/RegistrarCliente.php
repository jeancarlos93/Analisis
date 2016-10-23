<?php

include_once '../Data/DataCliente.php';
include_once '../Domain/Cliente.php';

$nombre = trim($_POST['nombre']);  //asocia los name de los campos de las interfaces
$apellido = $_POST['apellido'];
$cedula= $_POST['cedula'];
$telefono = $_POST['telefono'];
//sleep(5);               
$cliente= new Cliente();
$cliente->setNombre($nombre);
$cliente->setApellido($apellido);
$cliente->setCedula($cedula);
$cliente->setTelefono($telefono);
registrarCliente($cliente);
             