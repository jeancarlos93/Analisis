<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Data/DataAbono.php';
include_once '../Domain/Abono.php';

 $clave = $_GET['clave'];
 $codigoFactura = $_GET['codigoFactura'];
 
//if($clave == 2){
//        
      header("Location: ../View/Registrar_Abono.php?tipoFactura=$clave&codigo=$codigoFactura");       
//    }
//    else if($clave == 1){
//        //llamar a su metodo de registar apartado
//        header("Location: ../View/Registrar_Abono.php?codigo=$codigoFactura");       
//    }
        




