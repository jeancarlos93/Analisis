<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Data/DataAbono.php';
include_once '../Domain/Abono.php';

$codigo = trim($_POST['codigo']);
$factCompra = trim($_POST['facturaCompra']);
$factVenta = trim($_POST['facturaVenta']);  //asocia los name de los campos de las interfaces
$tipo = $_POST['tipo'];
$montoAbono = $_POST['Abono'];
$saldoInicial = $_POST['SaldoInicial'];
$saldoFinal = $_POST['SaldoFinal'];
                   
$abono = new Abono();
$abono->setCodigo($codigo);
$abono->setFacturaCompra($factCompra);
$abono->setFacturaVenta($factVenta);
$abono->setTipo($tipo);
$abono ->setAbono($montoAbono);
$abono->setSaldoInicial($saldoInicial);
$abono->setSaldoActual($saldoFinal);

modificarAbono($abono);