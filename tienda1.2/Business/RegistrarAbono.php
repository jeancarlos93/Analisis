<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Data/DataAbono.php';
include_once '../Domain/Abono.php';

$factura = $_GET['factura'];

$facturaCompra = trim($_POST['facturaCompra']);  //asocia los name de los campos de las interfaces
//$facturaVenta = $_POST['facturaVenta'];
$tipo = $_POST['tipo'];
$montoAbono = $_POST['Abono'];
$saldoInicial = $_POST['SaldoInicial'];
$saldoFinal = $_POST['SaldoFinal'];
//$fecha = $_POST['fecha'];

  // sleep(5); 
$abono = new Abono();
$abono->setFacturaCompra($facturaCompra);
//$abono->setFacturaVenta($facturaVenta);
$abono->setTipo($tipo);
$abono->setAbono($montoAbono);
$abono->setSaldoInicial($saldoInicial);
$abono->setSaldoFinal($saldoFinal);
//$abono->setFecha($fecha);
if($factura == 2){
    registrarAbonoCompra($abono);
}else {
    registrarAbonoVenta($abono);
}



