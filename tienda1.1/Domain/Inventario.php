<?php


class Inventario{
    
    var $id;
    var $descripcion;
    var $marca;
    var $categoria;
    var $fecha;
    var $tipo;
    var $talla;
    var $color;
    var $total;
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }
    function getDescripcion() {
        return $this->descripcion;
    }

    function getMarca() {
        return $this->marca;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    
    function getFecha() {
        return $this->fecha;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getTalla() {
        return $this->talla;
    }

    function getColor() {
        return $this->color;
    }

    function getTotal() {
        return $this->total;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setTalla($talla) {
        $this->talla = $talla;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setTotal($total) {
        $this->total = $total;
    }
     
}
