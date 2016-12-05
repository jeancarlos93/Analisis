<?php

class CuentaXPagar{
var $factura;
var $abono;
var $proveedor;
var $total;
var $empleado;
var $fecha;
    
    function setFactura($factura) {
        $this->factura= $factura;
    }
    function getFactura() {
        return $this->factura;
    }
    
    function setAbono($abono) {
        $this->abono= $abono;
    }
    
    function getAbono() {
        return $this->abono;
    }
    function setProveedor($proveedor) {
        $this->proveedor= $proveedor;
    }
    function getProveedor() {
        return $this->proveedor;
    }
    
     function setEmpleado($empleado) {
        $this->empleado= $empleado;
    }
    function getEmpleado() {
        return $this->empleado;
    }
    
    function setTotal($total) {
        $this->total= $total;
    }
    
    function getTotal() {
        return $this->total;
    }
    
    function setFecha($fecha) {
        $this->fecha= $fecha;
    } 
    function getFecha() {
        return $this->fecha;
    }
 
}