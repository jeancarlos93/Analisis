<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Data/DataProvedor.php';
include_once '../Domain/Proveedor.php';

$codigo = trim($_POST['codigo']);
$nombre = trim($_POST['nombre']);  //asocia los name de los campos de las interfaces
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$empresa = $_POST['empresa'];
                   
$proveedor = new Proveedor();
$proveedor->setCodigo($codigo);
$proveedor->setNombre($nombre);
$proveedor->setApellido($apellido);
$proveedor->setCorreo($correo);
$proveedor->setDirecion($direccion);
$proveedor->setEmpresa($empresa);
modificarProveedor($proveedor);