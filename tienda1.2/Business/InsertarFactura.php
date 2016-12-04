<?php

include_once '../Data/DataFacturaVenta.php';
//include_once '../../Domain/Producto.php';


 $numeroFactura = $_POST['numFact'];
 $nombreCliente = $_POST['ClienteCod'];
$nombreVendedor = $_POST['cedulaVendedor'];
 $total = $_POST['total'];
 $subTotal = $_POST['subt'];
 $pagoFinal = $_POST['pagoFinal'];
$cantidades=$_POST['cantProH'];
$codigosProductos=$_POST['codigoProdH'];
$formaPago=$_POST['selCombo'];
$tipoFactura=$_POST['tipoFac'];


$arrayCantidades = preg_split("/[\,]+/", $cantidades);
$arrayCodigos = preg_split("/[\,]+/", $codigosProductos);

$factura = new Factura();

$factura->setNumeroFactura($numeroFactura);
$factura->setNombreCliente($nombreCliente);
$factura->setNombreVendedor($nombreVendedor);
$factura->setTotal($pagoFinal);
$factura->setSubTotal($subTotal);
$factura->setFormaPago($formaPago);
$factura->setTipoFactura($tipoFactura);
Facturar($factura,$arrayCantidades,$arrayCodigos,$total);

