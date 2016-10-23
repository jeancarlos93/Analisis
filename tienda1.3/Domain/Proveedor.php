<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Proveedor{
    
    var $codigo;
    var $nombre;
    var $apellido;
    var $telefono;
    var $correo;
    var $empresa;
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
    
      function setCorreo($correo) {
        $this->correo= $correo;
    }
    
    function getCorreo() {
        return $this->correo;
    }
    
    function setTelefono($tel) {
        $this->telefono= $tel;
    }
    
    function getTelefono() {
        return $this->telefono;
    }
    
    function getEmpresa() {
        return $this->empresa;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

        
    function setEstado($estado) {
        $this->estado= $estado;
    }
    
    function getEstado() {
        return $this->estado;
    }  
}

