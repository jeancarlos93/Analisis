<?php


class Producto{
    
    var $id;
    var $descripcion;
    var $precioUnitario;
    var $precioVenta;
    var $marca;
    var $categoria;
    var $estado;
    
    function setId($id) {
        $this->id= $id;
    }
    
    function getId() {
        return $this->id;
    }
    
      function setDescripcion($descripcion) {
        $this->descripcion= $descripcion;
    }
    
    function getDescripcion() {
        return $this->descripcion;
    }
    
      function setPrecioUnitario($precioUnitario) {
        $this->precioUnitario= $precioUnitario;
    }
    
    function getPrecioUnitario() {
        return $this->precioUnitario;
    }
    
      function setPrecioVenta($precioVenta) {
        $this->precioVenta= $precioVenta;
    }
    
    function getPrecioVenta() {
        return $this->precioVenta;
    }
    
    function setMarca($marca) {
        $this->marca= $marca;
    }
    
    function getMarca() {
        return $this->marca;
    }
    
    function setCategoria($categoria) {
        $this->categoria= $categoria;
    }
    
    function getCategoria() {
        return $this->categoria;
    }
    
    function setEstado($estado) {
        $this->estado= $estado;
    }
    
    function getEstado() {
        return $this->estado;
    }
     
}