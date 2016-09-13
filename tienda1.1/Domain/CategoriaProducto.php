<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class categoriaProducto{
    
    var $id;
    var $categoria;
    
    function setId($id) {
        $this->id= $id;
    }
    
    function getId() {
        return $this->id;
    }
    function setCategoria($categoria) {
        $this->categoria= $categoria;
    }
    
    function getCategoria() {
        return $this->categoria;
    }
    
}