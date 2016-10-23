<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class MarcaProducto{
    
    var $id;
    var $marca;
    
    function setId($id) {
        $this->id= $id;
    }
    
    function getId() {
        return $this->id;
    }
    function setMarca($marca) {
        $this->marca= $marca;
    }
    
    function getMarca() {
        return $this->marca;
    }
    
    
    
}
