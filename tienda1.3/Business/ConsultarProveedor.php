<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Data/DataProvedor.php';
include_once '../Domain/Proveedor.php';

$opcion = $_POST['opcionBusqueda'];
$campoBusquedad= $_POST['campo'];
consultarProveedor($opcion, $campoBusquedad);