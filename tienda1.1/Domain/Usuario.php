<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario{

    var $nombre;
    var $apellido;
    var $telefono;
    var $cedula;
    var $fechaContratacion;
    var $contrasenia;
    var $tipoEmpleado;

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
    
      function setTelefono($telefono) {
        $this->telefono= $telefono;
    }
    
    function getTelefono() {
        return $this->telefono;
    }
    
    function setCedula($cedula) {
        $this->cedula= $cedula;
    }
    
    function getCedula() {
        return $this->cedula;
    }
    
    function setFechaContrato($fechaContratacion) {
        $this->fechaContratacion= $fechaContratacion;
    }
    
    function getFechaContrato() {
        return $this->fechaContratacion;
    }
    
    function setContrasenia($contrasenia) {
        $this->contrasenia= $contrasenia;
    }
    
    function getContrasenia() {
        return $this->contrasenia;
    }
    
    function setTipoEmpleado($tipoEmpleado) {
        $this->tipoEmpleado= $tipoEmpleado;
    }
    
    function getTipoEmpleado() {
        return $this->tipoEmpleado;
    }
    
    
}

