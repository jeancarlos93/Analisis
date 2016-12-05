<?php

class Abono{
var $codigo;
var $facturaVenta;                // gHEWE32gs!fy
var $facturaCompra;
var $tipo;
var $abono;
var $saldoInicial;
var $saldoActual;
var $saldoFinal;
var $fecha;
    
    function setCodigo($codigo){
        $this->codigo=$codigo;
    }    
    function getCodigo(){
        return $this->codigo;
    }
        
    function setFacturaCompra($factura) {
        $this->facturaCompra= $factura;
    }
    function getFacturaCompra() {
        return $this->facturaCompra;
    }
    function setFacturaVenta($factura) {
        $this->facturaVenta= $factura;
    }
    function getFacturaVenta() {
        return $this->facturaVenta;
    }
    
    function setAbono($abono) {
        $this->abono= $abono;
    }
    
    function getAbono() {
        return $this->abono;
    }
    function setTipo($tipo) {
        $this->tipo= $tipo;
    }
    function getTipo() {
        return $this->tipo;
    }
    function setSaldoInicial($saldo) {
        $this->saldoInicial= $saldo;
    }
    
    function getSaldoInicial() {
        return $this->saldoInicial;
    }
     function setSaldoFinal($saldo) {
        $this->saldoFinal= $saldo;
    }
    
    function getSaldoFinal() {
        return $this->saldoFinal;
    }
     function setSaldoActual($saldo) {
        $this->saldoActual= $saldo;
    }
    
    function getSaldoActual() {
        return $this->saldoActual;
    }
    
    
    function setFecha($fecha) {
        $this->fecha= $fecha;
    } 
    function getFecha() {
        return $this->fecha;
    }
 
}