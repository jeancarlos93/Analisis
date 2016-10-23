<?php

class Cliente{
var $nombre;
var $apellido;
var $telefono;
var $cedula;
var $codigo;
var $estado;
    
    function setCodigo($codigo) {
        $this->codigo= $codigo;
    }
    
    function getCodigo() {
        return $this->codigo;
    }
    function setNombre($nombre) {
        $this->nombre= $nombre;
    }
    
    function getNombre() {
        return $this->nombre;
    }
    function setApellido($apellido) {
        $this->apellido= $apellido;
    }
    
    function getApellido() {
        return $this->apellido;
    }
    function setCedula($cedula) {
        $this->cedula= $cedula;
    }
    
    function getCedula() {
        return $this->cedula;
    }
    function setTelefono($telefono) {
        $this->telefono= $telefono;
    }
    
    function getTelefono() {
        return $this->telefono;
    }
    function setEstado($estado) {
        $this->estado= $estado;
    }
    
    function getEstado() {
        return $this->estado;
    }
}