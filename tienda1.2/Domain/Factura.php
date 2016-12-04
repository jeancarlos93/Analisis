<?php

class Factura{
var $numeroFactura;
var $nombreCliente;
var $nombreVendedor;
var $fecha;
var $formaPago;
var $total;
var $subTotal;
var $descuento;
var $tipoFactura;

function getNumeroFactura() {
    return $this->numeroFactura;
}

function getNombreCliente() {
    return $this->nombreCliente;
}

function getNombreVendedor() {
    return $this->nombreVendedor;
}

function getFecha() {
    return $this->fecha;
}

function getFormaPago() {
    return $this->formaPago;
}

function getTotal() {
    return $this->total;
}

function getSubTotal() {
    return $this->subTotal;
}

function getDescuento() {
    return $this->descuento;
}

function getTipoFactura() {
    return $this->tipoFactura;
}

function setNumeroFactura($numeroFactura) {
    $this->numeroFactura = $numeroFactura;
}

function setNombreCliente($nombreCliente) {
    $this->nombreCliente = $nombreCliente;
}

function setNombreVendedor($nombreVendedor) {
    $this->nombreVendedor = $nombreVendedor;
}

function setFecha($fecha) {
    $this->fecha = $fecha;
}

function setFormaPago($formaPago) {
    $this->formaPago = $formaPago;
}

function setTotal($total) {
    $this->total = $total;
}

function setSubTotal($subTotal) {
    $this->subTotal = $subTotal;
}

function setDescuento($descuento) {
    $this->descuento = $descuento;
}

function setTipoFactura($tipoFactura) {
    $this->tipoFactura = $tipoFactura;
}

}

