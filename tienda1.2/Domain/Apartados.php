<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Apartados
 *
 * @author JEAN-PC
 */
class Apartados {
    //put your code here
    
   var $codigo;
   var $cliente;
   var $descripcion;
   var $total;
   var $fecha;
   
   function setCodigo($cod){
       $this->codigo= $cod;
   }
   function getCodigo() {
       return $this->codigo;
   }
   
    function setCliente($cliente){
       $this->cliente= $cliente;
   }
   function getCliente() {
       return $this->cliente;
   }
   
    function setDescripcion($descrp){
       $this->descripcion= $descrp;
   }
   function getDescripcion() {
       return $this->descripcion;
   }
   
    function setTotal($total){
       $this->total= $total;
   }
   function getTotal() {
       return $this->total;
   }
   
    function setFecha($fecha){
       $this->fecha= $fecha;
   }
   function getFecha() {
       return $this->fecha;
   }
}
