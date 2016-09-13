<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Data/DataProvedor.php';
include_once '../Domain/Proveedor.php';

$nombre = trim($_POST['nombre']);  //asocia los name de los campos de las interfaces
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$empresa = $_POST['empresa'];

   
$proveedor = new Proveedor();
$proveedor->setNombre($nombre);
$proveedor->setApellido($apellido);
$proveedor->setCorreo($correo);
$proveedor->setTelefono($telefono);
$proveedor->setEmpresa($empresa);
registrarProveedor($proveedor);


