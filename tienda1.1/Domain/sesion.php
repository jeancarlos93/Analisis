<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function __construct() {
     session_start ();
  }
function set($nombre, $valor) {
     $_SESSION [$nombre] = $valor;
  }
function get($nombre) {
     if (isset ( $_SESSION [$nombre] )) {
        return $_SESSION [$nombre];
     } else {
         return false;
     }
  }
function elimina_variable($nombre) {
      unset ( $_SESSION [$nombre] );
  }
function termina_sesion() {
      $_SESSION = array();
      session_destroy ();
  }